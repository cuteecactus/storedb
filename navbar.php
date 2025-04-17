<div id="navbar-container">
    <div>
        <form action="#" method="get" id="navbar-form">
            <input type="text" name="search" placeholder="Search">
            <input type="submit" value="Search">
        </form>
    </div>

    <div>
        <!-- <a href="#add">New</a> -->

        <svg id="navbar-hamburger-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            fill="rgba(255,255,255,1)">
            <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z"></path>
        </svg>
        <div id="navbar-hamburger-menu">
            <svg id="navbar-hamburger-menu-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                fill="rgba(255,255,255,1)">
                <path
                    d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z">
                </path>
            </svg>

            <div id="navbar-hamburger-menu-links">
                <a href="#socials">Home</a>
                <a href="#socials">Users</a>
                <a href="#socials">Products</a>
                <a href="#socials">Logs</a>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById("navbar-hamburger-icon").addEventListener("click", () => {
        document.getElementById("navbar-hamburger-menu").classList.add("active");
    })
    document.getElementById("navbar-hamburger-menu-close").addEventListener("click", () => {
        document.getElementById("navbar-hamburger-menu").classList.remove("active");
    })

    
</script>