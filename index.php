<?php include "./header.php" ?>
<title>Dashboard - ForgeNFlex</title>

<div id="index-container">
    <div id="index-box">
        <table id="index-table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td>
                        <a href="#edit">View</a>
                        <a href="#edit">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2H2w0@example.com</td>
                    <td><a href="#edit">Edit</a></td>
                </tr>

            </tbody>
        </table>
        <div id="index-table-pagination">
            <a href="#previous">Previous</a>
            <div id="index-table-pagination-pages">
                <a href="#1">1</a>
                <a href="#1">2</a>
            </div>
            <a href="#next">Next</a>
        </div>
    </div>
</div>

<div id="index-floating-buttons">
    <button id="index-floating-button-filter">
        <svg xmlns="http://www.w3.org/2000/svg" onclick="toggleFilterMenu()"viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
            <path
                d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z">
            </path>
        </svg>
        <button id="index-floating-button-add">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path>
            </svg>
        </button>
</div>


<div id="index-filter-menu-container" class="hide">
    <div id="index-filter-menu-box">

        <svg id="index-filter-menu-close" onclick="toggleFilterMenu()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
            <path
                d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z">
            </path>
        </svg>

        <form action="#" id="index-filter-menu-form">
            <div id="index-filter-menu-form-top">
                <label for="filter">Filter By</label>
                <select name="filter" id="filter" onchange="onFilterChange()">
                    <option value="customer_name">Customer Name</option>
                    <option value="order_id">Order Id</option>
                    <option value="customer_email">Customer Email</option>
                    <option value="order_address">Order Address</option>
                    <option value="order_city">Order City</option>
                    <option value="product_id">Product Id</option>
                    <option value="product_name">Product Name</option>
                    <option value="order_date">Order Date</option>
                </select>

                <input class="" type="text" name="filter-customer-name" id="filter-customer-name"
                    placeholder="Filter By Customer Name">
                <input class="hide" type="text" name="filter-order-id" id="filter-order-id"
                    placeholder="Filter By Order Id">
                <input class="hide" type="email" name="filter-customer-email" id="filter-customer-email"
                    placeholder="Filter By Customer Email">
                <input class="hide" type="text" name="filter-order-address" id="filter-order-address"
                    placeholder="Filter By Order Address">
                <input class="hide" type="text" name="filter-order-city" id="filter-order-city"
                    placeholder="Filter By Order City">
                <input class="hide" type="text" name="filter-product-id" id="filter-product-id"
                    placeholder="Filter By Product Id">
                <input class="hide" type="text" name="filter-product-name" id="filter-product-name"
                    placeholder="Filter By Product Name">
                <label class="hide" id="filter-order-date-label-from" for="filter-order-date-from">Date From:</label>
                <input class="hide" type="date" name="filter-order-date-from" id="filter-order-date-from">
                <label class="hide" id="filter-order-date-label-to" for="filter-order-date-from">Date To:</label>
                <input class="hide" class="filter-order-date-label" type="date" name="filter-order-date-to"
                    id="filter-order-date-to">
            </div>


            <div id="index-filter-menu-form-top">
                <input type="submit" value="Filter">
            </div>
        </form>
    </div>
</div>

<script>
    function toggleFilterMenu () {
        const filterMenu = document.querySelector ("#index-filter-menu-container");
        const isActive = filterMenu.classList.contains("hide")

        if (isActive == true) {
            filterMenu.classList.remove ("hide")
        } else {
            filterMenu.classList.add ("hide")

        }
    }

    function onFilterChange() {
        const filterSelect = document.querySelector("#filter")
        const filterSelectValue = filterSelect.value;

        const customerNameInput = document.querySelector("#filter-customer-name")
        const orderIdInput = document.querySelector("#filter-order-id")
        const customerEmailInput = document.querySelector("#filter-customer-email")
        const orderAddressInput = document.querySelector("#filter-order-address")
        const orderCityInput = document.querySelector("#filter-order-city")
        const productIdInput = document.querySelector("#filter-product-id")
        const productNameInput = document.querySelector("#filter-product-name")
        const orderDateLabelFrom = document.querySelector("#filter-order-date-label-from")
        const orderDateFromInput = document.querySelector("#filter-order-date-from")
        const orderDateLabelTo = document.querySelector("#filter-order-date-label-to")
        const orderDateToInput = document.querySelector("#filter-order-date-to")

        switch (filterSelectValue) {
            case "customer_name":
                customerNameInput.classList.remove("hide")
                orderIdInput.classList.add("hide")
                customerEmailInput.classList.add("hide")
                orderAddressInput.classList.add("hide")
                orderCityInput.classList.add("hide")
                productIdInput.classList.add("hide")
                productNameInput.classList.add("hide")
                orderDateLabelFrom.classList.add("hide")
                orderDateLabel.classList.add("hide")
                orderDateFromInput.classList.add("hide")
                orderDateToInput.classList.add("hide")
                break;

            case "order_id":
                customerNameInput.classList.add("hide")
                orderIdInput.classList.remove("hide")
                customerEmailInput.classList.add("hide")
                orderAddressInput.classList.add("hide")
                orderCityInput.classList.add("hide")
                productIdInput.classList.add("hide")
                productNameInput.classList.add("hide")
                orderDateLabelFrom.classList.add("hide")
                orderDateLabelTo.classList.add("hide")
                orderDateFromInput.classList.add("hide")
                orderDateToInput.classList.add("hide")
                break;

            case "customer_email":
                customerNameInput.classList.add("hide")
                orderIdInput.classList.add("hide")
                customerEmailInput.classList.remove("hide")
                orderAddressInput.classList.add("hide")
                orderCityInput.classList.add("hide")
                productIdInput.classList.add("hide")
                productNameInput.classList.add("hide")
                orderDateLabelFrom.classList.add("hide")
                orderDateLabelTo.classList.add("hide")
                orderDateFromInput.classList.add("hide")
                orderDateToInput.classList.add("hide")
                break;

            case "order_address":
                customerNameInput.classList.add("hide")
                orderIdInput.classList.add("hide")
                customerEmailInput.classList.add("hide")
                orderAddressInput.classList.remove("hide")
                orderCityInput.classList.add("hide")
                productIdInput.classList.add("hide")
                productNameInput.classList.add("hide")
                orderDateLabelFrom.classList.add("hide")
                orderDateLabelTo.classList.add("hide")
                orderDateFromInput.classList.add("hide")
                orderDateToInput.classList.add("hide")
                break;

            case "order_city":
                customerNameInput.classList.add("hide")
                orderIdInput.classList.add("hide")
                customerEmailInput.classList.add("hide")
                orderAddressInput.classList.add("hide")
                orderCityInput.classList.remove("hide")
                productIdInput.classList.add("hide")
                productNameInput.classList.add("hide")
                orderDateLabelFrom.classList.add("hide")
                orderDateLabelTo.classList.add("hide")
                orderDateFromInput.classList.add("hide")
                orderDateToInput.classList.add("hide")
                break;

            case "product_id":
                customerNameInput.classList.add("hide")
                orderIdInput.classList.add("hide")
                customerEmailInput.classList.add("hide")
                orderAddressInput.classList.add("hide")
                orderCityInput.classList.add("hide")
                productIdInput.classList.remove("hide")
                productNameInput.classList.add("hide")
                orderDateLabelFrom.classList.add("hide")
                orderDateLabelTo.classList.add("hide")
                orderDateFromInput.classList.add("hide")
                orderDateToInput.classList.add("hide")
                break;

            case "product_name":
                customerNameInput.classList.add("hide")
                orderIdInput.classList.add("hide")
                customerEmailInput.classList.add("hide")
                orderAddressInput.classList.add("hide")
                orderCityInput.classList.add("hide")
                productIdInput.classList.add("hide")
                productNameInput.classList.remove("hide")
                orderDateLabelFrom.classList.add("hide")
                orderDateLabelTo.classList.add("hide")
                orderDateFromInput.classList.add("hide")
                orderDateToInput.classList.add("hide")
                break;

            case "order_date":
                customerNameInput.classList.add("hide")
                orderIdInput.classList.add("hide")
                customerEmailInput.classList.add("hide")
                orderAddressInput.classList.add("hide")
                orderCityInput.classList.add("hide")
                productIdInput.classList.add("hide")
                productNameInput.classList.add("hide")
                orderDateLabelFrom.classList.add("hide")
                orderDateLabelTo.classList.add("hide")
                orderDateFromInput.classList.remove("hide")
                orderDateToInput.classList.remove("hide")
                break;

            default:
                customerNameInput.classList.remove("hide")
                orderIdInput.classList.add("hide")
                customerEmailInput.classList.add("hide")
                orderAddressInput.classList.add("hide")
                orderCityInput.classList.add("hide")
                productIdInput.classList.add("hide")
                productNameInput.classList.add("hide")
                orderDateLabelFrom.classList.add("hide")
                orderDateLabelTo.classList.add("hide")
                orderDateFromInput.classList.add("hide")
                orderDateToInput.classList.add("hide")
                break;

        }

    }
</script>

<?php include "./footer.php" ?>