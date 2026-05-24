<?php

namespace Backend\CarRent\Models;

class BaseModel
{
    /**
     * Map a single row with relationships
     */
    protected static function mapSingleRow(array $row, array $withTypes = [])
    {
        $data = [];
        foreach ($row as $key => $value) {
            if (strpos($key, '__') !== false) {
                list($relation, $relKey) = explode('__', $key, 2);
                $data[$relation][$relKey] = $value;
            } else {
                $data[$key] = $value;
            }
        }

        foreach ($withTypes as $relation => $type) {
            if (isset($data[$relation])) {
                // Check if the relation row is entirely null (result of LEFT JOIN with no match)
                $isNull = true;
                foreach ($data[$relation] as $val) {
                    if ($val !== null) {
                        $isNull = false;
                        break;
                    }
                }

                if ($isNull) {
                    $data[$relation] = ($type === 'many') ? [] : null;
                } else if ($type === 'many') {
                    $data[$relation] = [$data[$relation]];
                }
            }
        }

        return $data;
    }

    /**
     * Map multiple rows with relationships, grouping by primary key for hasMany
     */
    protected static function mapRows(array $rows, string $primaryKey, array $withTypes = [])
    {
        $grouped = [];
        foreach ($rows as $row) {
            if (!isset($row[$primaryKey])) {
                return array_map(fn($r) => self::mapSingleRow($r, $withTypes), $rows);
            }
            
            $id = $row[$primaryKey];
            if (!isset($grouped[$id])) {
                $data = [];
                foreach ($row as $key => $value) {
                    if (strpos($key, '__') === false) {
                        $data[$key] = $value;
                    }
                }
                
                // Initialize relations
                foreach ($withTypes as $rel => $type) {
                    $data[$rel] = ($type === 'many') ? [] : null;
                }
                
                $grouped[$id] = $data;
            }

            foreach ($withTypes as $rel => $type) {
                $relData = [];
                $hasData = false;
                
                foreach ($row as $key => $value) {
                    if (strpos($key, $rel . '__') === 0) {
                        $relKey = substr($key, strlen($rel) + 2);
                        $relData[$relKey] = $value;
                        if ($value !== null) $hasData = true;
                    }
                }

                if ($hasData) {
                    if ($type === 'many') {
                        // Avoid duplicates in hasMany
                        $alreadyExists = false;
                        foreach ($grouped[$id][$rel] as $existing) {
                            if (array_values($existing) === array_values($relData)) {
                                $alreadyExists = true;
                                break;
                            }
                        }
                        if (!$alreadyExists) {
                            $grouped[$id][$rel][] = $relData;
                        }
                    } else {
                        $grouped[$id][$rel] = $relData;
                    }
                }
            }
        }
        return array_values($grouped);
    }
}
