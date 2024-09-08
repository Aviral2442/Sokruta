<style>
    footer .footer {
        position: relative;
        background: #000000;
        height: auto;
        color: #FFFFFF;
        padding: 20px 0;
    }

    .left,
    .info,
    .social,
    .right {
        padding-top: 36px;
        font-family: var(--ff-heading);
        font-size: 10px;
        line-height: 16px;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .info {
        padding-left: 140px;
    }

    .phone {
        display: inline-block;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    a {
        text-decoration: none;
        color: #FFFFFF;
    }

    .social a {
        display: inline-block;
        margin-right: 10px;
    }

    .footer-left .copyright .center {
        display: block;
        position: relative;
        text-align: center;
        color: #fff;
        font-size: 10px;
        text-transform: uppercase;
        line-height: 16px;
        letter-spacing: 2px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {

        .left,
        .info,
        .social,
        .right {
            text-align: center;
            padding-top: 20px;
        }

        .footer .row {
            flex-direction: column;
            align-items: center;
        }
    }

    .g-plus {
        height: 16px;
        font-weight: bold;
    }

    footer .footer .right span {
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
        width: 70px;
        height: 15px;
    }


    footer .footer .right i {
        font-size: 10px;
        text-transform: uppercase;
        line-height: 12px;
        font-style: normal;
        color: #fff;

    }

    .shift-left {

        display: flex;
        justify-content: space-between;
        gap: 15px;
    }

    @media (max-width: 768px) {
        .shift-left {
            flex-direction: column;
            align-items: center;
        }
    }


    .social a i {
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .social a:hover i {
        transform: translateX(-10px);
        /* Adjust the value as needed */
    }

    .right a i {
        display: inline-block;
        transition: transform 0.3s ease;

    }

    .right a:hover i {
        transform: translateX(-10px);
        /* Adjust the value as needed */
    }
</style>

<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 left">
                    <span>2024. Sokruta.com.ua <br>Interior design studio Andrew Sokruta</span>
                </div>
                <div class="col-md-9 shift-left">
                    <div class="info">
                        <ul>
                            <li>
                                <strong style="vertical-align: top;">T:</strong>
                                &nbsp; &nbsp;
                                <span class="phone">+380 95 307 307 1<br>+380 99 022 715 6</span>
                            </li>
                            <li>
                                <strong>@:</strong>
                                &nbsp; &nbsp;
                                <a href="#">info@sokruta.com.ua</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social">
                        <a href="#" class="center sk-hidden">
                            <i><img src="/img/shareicon.png" style="height: 25px" alt="Share Icon"></i>
                            &nbsp; &nbsp;like the site
                        </a>
                        &nbsp; &nbsp;
                        <a href="https://plus.google.com/101048867835238758403" target="_blank" rel="nofollow" class="g-plus sk-hidden">g+</a>
                    </div>
                    <div class="right">
                        <a href="#" target="_blank" rel="nofollow" class="sk-hidden">
                            <i >by</i>
                            <span><img src="/img/logo.png" style="height: 25px" alt="logo"></span>
                        </a>
                    </div>
                    
            </div>
        </div>
    </div>
</footer>