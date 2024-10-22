<style>
    /* RESET/BASIC STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

    :root {
        --white: #ffffff;
        --light-grey: #edf0f1;
        --green: #5be19e;
        --dark-green: #3bbe57;
        --black: #21232a;
    }

    ul {
        list-style: none;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    body {
        font-family: "Inter", sans-serif;
        text-align: center;
        padding: 0 20px;
        background: var(--light-grey);
        color: var(--white);
    }

    .notification {
        position: absolute;
        top: 0;
        right: 0;
        padding: 10px;
        background: var(--green);
    }

    /* MAIN STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .nav {
        position: relative;
        display: flex;
        justify-content: left; /* Align the menu to the left */
        max-width: 400px;
        padding-bottom: 20px;
        border-radius: 5px 5px 25px 25px;
        margin: 300px 0 0 20px; /* Adjust margin to position it from the left */
        background: var(--white);
        box-shadow: rgb(50 50 93 / 10%) 0 30px 60px -12px, rgb(0 0 0 / 15%) 0 18px 36px -18px;
    }

    .nav [type="checkbox"] {
        position: absolute;
        left: -9999px;
    }

    .nav [type="checkbox"]+label {
        position: relative;
        width: 75px;
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        cursor: pointer;
        z-index: 1;
        background: var(--green);
        border-radius: 50%;
        transform: translateY(-50%);
        transition: all 0.2s;
    }

    .nav [type="checkbox"]+label:hover {
        background: var(--dark-green);
    }

    .menu li {
    position: absolute;
    left: 0; /* Align menu items to the left */
    top: 0; /* Change positioning to start from top */
    transition: all 0.4s;
}

.menu li:nth-child(1) {
    top: 75px; /* Position the first item down */
    transition-delay: 0.2s;
}

.menu li:nth-child(2) {
    top: 140px; /* Adjust position to appear below the first */
    transition-delay: 0.15s;
}

.menu li:nth-child(3) {
    top: 205px; /* Adjust position for the third item */
    transition-delay: 0.1s;
}

.menu li:nth-child(4) {
    top: 270px; /* Adjust position for the fourth item */
    transition-delay: 0.05s;
}

    .menu li a {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--green);
    }

    .menu li a span {
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(calc(-100% - 5px));
        width: 100%;
        font-size: 13px;
        white-space: nowrap;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.3s;
        color: var(--black);
        font-weight: bold;
    }

    .nav input:checked+label {
    background: var(--black);
    transform: translateY(calc(-50% + 4px));
}

.nav input:checked~.menu li:nth-child(1) {
    top: 75px;
    transition-delay: 0.1s;
}

.nav input:checked~.menu li:nth-child(2) {
    top: 140px;
    transition-delay: 0.2s;
}

.nav input:checked~.menu li:nth-child(3) {
    top: 205px;
    transition-delay: 0.3s;
}

.nav input:checked~.menu li:nth-child(4) {
    top: 270px;
    transition-delay: 0.4s;
}

    .nav input:checked~.menu li a span {
        opacity: 1;
        transition-delay: 0.9s;
    }
</style>

<nav class="nav">
    <input id="menu" type="checkbox">
    <label for="menu">Menu</label>
    <ul class="menu">
        <li>
            <a href="#0">
                <span>About</span>
                <i class="fas fa-address-card" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="#0">
                <span>Projects</span>
                <i class="fas fa-tasks" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="#0">
                <span>Clients</span>
                <i class="fas fa-users" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="#0">
                <span>Contact</span>
                <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</nav>
