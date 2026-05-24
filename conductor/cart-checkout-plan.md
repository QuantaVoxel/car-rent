# Plan: Implement Cart and Checkout with QRIS

## Background & Motivation
The user wants to implement a shopping cart mechanism using `localStorage` for the vehicle rental public pages. After adding items to the cart, the user should be able to checkout and pay using a simulated QRIS payment.

## Scope
1.  **Cart Management (localStorage)**:
    *   Update `public/kendaraan-detail.php`: Modify the "Booking Sekarang" button to execute JavaScript. The JS will read the vehicle details (ID, name, price, photo, type) and add them to an array in `localStorage`, then redirect to `cart.php`.
    *   Update `public/cart.php`: Replace the static HTML cart table with JavaScript that reads from `localStorage` and dynamically renders the rows. It will also calculate the total price and provide a "Proceed to Checkout" button.
2.  **Checkout Process**:
    *   Create `public/checkout.php`: A form for the user to input pick-up location, drop-off location, and distance (dummy input for now). It will require the user to be logged in. It will read the cart from `localStorage` via JS and populate a hidden field to submit the cart data.
    *   Create `public/process/checkout.php`: A backend script to handle the checkout form submission. For each item in the cart, it will:
        *   Create a record in the `pesanan` table.
        *   Create a record in the `pembayaran` table (status 'menunggu', method 'QRIS').
    *   Clear the `localStorage` cart upon successful checkout.
3.  **QRIS Payment Simulation**:
    *   Create `public/payment.php`: Displays the order summary and a generated QR code (using a free QR code API for visual representation).
    *   Include a button to "Simulate Payment Success" which triggers a backend update to change the `pembayaran` status to `berhasil` and `pesanan` status to `dikonfirmasi`.

## Implementation Steps
1.  Write JS in `kendaraan-detail.php` to push items to `localStorage`.
2.  Refactor `cart.php` with JS to read `localStorage`, render items, and handle removal.
3.  Create `checkout.php` frontend ensuring user authentication (`auth()->check()`).
4.  Create `process/checkout.php` to insert data into `pesanan` and `pembayaran`.
5.  Create `payment.php` to display QRIS and simulate payment confirmation.

## Verification
-   Add a car from detail page, check if it appears in `cart.php`.
-   Proceed to checkout, ensure it redirects to login if not authenticated.
-   Complete checkout, verify `pesanan` and `pembayaran` records are created in DB.
-   Simulate payment, verify statuses are updated correctly.