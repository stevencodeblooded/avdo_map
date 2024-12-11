

<!DOCTYPE html>
<html>
<head>
<title>UniqueLife Roleplay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-mouse-position@1.0.5/src/L.Control.MousePosition.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet-mouse-position@1.0.5/src/L.Control.MousePosition.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="icon" href="../images/WEB.png" type="image/png">
    <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            z-index: 1;
            background: url(images/tiles/water.png) repeat;
        }


    </style>
</head>
<header>
        <div class="header-main">
            <div>
                <a href="../index.php"><img src="../images/brand.svg" alt=""></a>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="../index.php" class="nav-link"><span><svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.5 15.875V7.75H3.75V15.875C3.75 16.0408 3.81584 16.1997 3.93305 16.3169C4.05027 16.4342 4.20924 16.5 4.375 16.5H15.625C15.7908 16.5 15.9497 16.4342 16.0669 16.3169C16.1841 16.1997 16.25 16.0408 16.25 15.875V7.75H17.5V15.875C17.5 16.3723 17.3025 16.8492 16.9508 17.2008C16.5992 17.5525 16.1223 17.75 15.625 17.75H4.375C3.87772 17.75 3.4008 17.5525 3.04917 17.2008C2.69754 16.8492 2.5 16.3723 2.5 15.875ZM16.25 2.125V6.5L13.75 4V2.125C13.75 1.95924 13.8158 1.80027 13.9331 1.68306C14.0503 1.56585 14.2092 1.5 14.375 1.5H15.625C15.7908 1.5 15.9497 1.56585 16.0669 1.68306C16.1841 1.80027 16.25 1.95924 16.25 2.125Z"
                                        fill="#212529" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.11625 0.875001C9.35066 0.640662 9.66854 0.509018 10 0.509018C10.3315 0.509018 10.6493 0.640662 10.8837 0.875001L19.1925 9.1825C19.3099 9.29986 19.3758 9.45903 19.3758 9.625C19.3758 9.79097 19.3099 9.95014 19.1925 10.0675C19.0751 10.1849 18.916 10.2508 18.75 10.2508C18.584 10.2508 18.4249 10.1849 18.3075 10.0675L10 1.75875L1.6925 10.0675C1.57514 10.1849 1.41597 10.2508 1.25 10.2508C1.08403 10.2508 0.924854 10.1849 0.807496 10.0675C0.690138 9.95014 0.624207 9.79097 0.624207 9.625C0.624207 9.45903 0.690138 9.29986 0.807496 9.1825L9.11625 0.875001Z"
                                        fill="#212529" />
                                </svg></span>Startseite</a></li>
                    <li><a href="../ucp.php" class="nav-link"><span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.99986 5.94238C9.46702 5.94238 8.9394 6.04733 8.44712 6.25124C7.95485 6.45515 7.50755 6.75402 7.13078 7.13079C6.754 7.50757 6.45513 7.95486 6.25122 8.44714C6.04731 8.93942 5.94236 9.46704 5.94236 9.99988C5.94236 10.5327 6.04731 11.0603 6.25122 11.5526C6.45513 12.0449 6.754 12.4922 7.13078 12.869C7.50755 13.2457 7.95485 13.5446 8.44712 13.7485C8.9394 13.9524 9.46702 14.0574 9.99986 14.0574C11.076 14.0574 12.108 13.6299 12.8689 12.869C13.6299 12.108 14.0574 11.076 14.0574 9.99988C14.0574 8.92376 13.6299 7.89172 12.8689 7.13079C12.108 6.36986 11.076 5.94238 9.99986 5.94238ZM7.19236 9.99988C7.19236 9.25528 7.48815 8.54118 8.01466 8.01468C8.54117 7.48817 9.25527 7.19238 9.99986 7.19238C10.7445 7.19238 11.4586 7.48817 11.9851 8.01468C12.5116 8.54118 12.8074 9.25528 12.8074 9.99988C12.8074 10.7445 12.5116 11.4586 11.9851 11.9851C11.4586 12.5116 10.7445 12.8074 9.99986 12.8074C9.25527 12.8074 8.54117 12.5116 8.01466 11.9851C7.48815 11.4586 7.19236 10.7445 7.19236 9.99988Z"
                                        fill="#212529" />
                                    <path
                                        d="M12.2449 1.67863C11.5861 -0.558871 8.41361 -0.558871 7.75486 1.67863L7.63736 2.07738C7.59136 2.23357 7.51098 2.37748 7.40213 2.49858C7.29328 2.61967 7.15871 2.71487 7.00829 2.77719C6.85787 2.83952 6.6954 2.8674 6.53281 2.85878C6.37021 2.85016 6.2116 2.80526 6.06861 2.72738L5.70361 2.52738C3.65361 1.41238 1.41236 3.65488 2.52861 5.70363L2.72736 6.06863C2.80524 6.21162 2.85014 6.37022 2.85876 6.53282C2.86738 6.69542 2.8395 6.85788 2.77718 7.0083C2.71485 7.15873 2.61965 7.2933 2.49856 7.40215C2.37747 7.511 2.23355 7.59137 2.07736 7.63738L1.67861 7.75488C-0.558887 8.41363 -0.558887 11.5861 1.67861 12.2449L2.07736 12.3624C2.23355 12.4084 2.37747 12.4888 2.49856 12.5976C2.61965 12.7065 2.71485 12.841 2.77718 12.9915C2.8395 13.1419 2.86738 13.3043 2.85876 13.4669C2.85014 13.6295 2.80524 13.7881 2.72736 13.9311L2.52736 14.2961C1.41236 16.3461 3.65361 18.5886 5.70361 17.4711L6.06861 17.2724C6.2116 17.1945 6.37021 17.1496 6.53281 17.141C6.6954 17.1324 6.85787 17.1602 7.00829 17.2226C7.15871 17.2849 7.29328 17.3801 7.40213 17.5012C7.51098 17.6223 7.59136 17.7662 7.63736 17.9224L7.75486 18.3211C8.41361 20.5586 11.5861 20.5586 12.2449 18.3211L12.3624 17.9224C12.4084 17.7662 12.4887 17.6223 12.5976 17.5012C12.7064 17.3801 12.841 17.2849 12.9914 17.2226C13.1419 17.1602 13.3043 17.1324 13.4669 17.141C13.6295 17.1496 13.7881 17.1945 13.9311 17.2724L14.2961 17.4724C16.3461 18.5886 18.5886 16.3449 17.4711 14.2961L17.2724 13.9311C17.1945 13.7881 17.1496 13.6295 17.141 13.4669C17.1323 13.3043 17.1602 13.1419 17.2225 12.9915C17.2849 12.841 17.3801 12.7065 17.5012 12.5976C17.6223 12.4888 17.7662 12.4084 17.9224 12.3624L18.3211 12.2449C20.5586 11.5861 20.5586 8.41363 18.3211 7.75488L17.9224 7.63738C17.7662 7.59137 17.6223 7.511 17.5012 7.40215C17.3801 7.2933 17.2849 7.15873 17.2225 7.0083C17.1602 6.85788 17.1323 6.69542 17.141 6.53282C17.1496 6.37022 17.1945 6.21162 17.2724 6.06863L17.4724 5.70363C18.5886 3.65363 16.3449 1.41238 14.2961 2.52863L13.9311 2.72738C13.7881 2.80526 13.6295 2.85016 13.4669 2.85878C13.3043 2.8674 13.1419 2.83952 12.9914 2.77719C12.841 2.71487 12.7064 2.61967 12.5976 2.49858C12.4887 2.37748 12.4084 2.23357 12.3624 2.07738L12.2449 1.67863ZM8.95361 2.03238C9.26111 0.988628 10.7386 0.988628 11.0461 2.03238L11.1636 2.43113C11.2624 2.76623 11.4349 3.07499 11.6685 3.33475C11.9021 3.59452 12.1909 3.79871 12.5137 3.93235C12.8365 4.066 13.1851 4.12571 13.534 4.10712C13.8828 4.08852 14.2231 3.99208 14.5299 3.82488L14.8936 3.62488C15.8486 3.10613 16.8936 4.14988 16.3736 5.10613L16.1749 5.47113C16.0079 5.77791 15.9117 6.11816 15.8933 6.46695C15.8749 6.81573 15.9348 7.16421 16.0685 7.48686C16.2023 7.8095 16.4066 8.09813 16.6663 8.3316C16.9261 8.56506 17.2348 8.73745 17.5699 8.83613L17.9674 8.95363C19.0111 9.26113 19.0111 10.7386 17.9674 11.0461L17.5686 11.1636C17.2335 11.2624 16.9248 11.4349 16.665 11.6685C16.4052 11.9021 16.201 12.1909 16.0674 12.5137C15.9337 12.8365 15.874 13.1851 15.8926 13.534C15.9112 13.8828 16.0077 14.2231 16.1749 14.5299L16.3749 14.8936C16.8936 15.8486 15.8499 16.8936 14.8936 16.3736L14.5299 16.1749C14.223 16.0077 13.8827 15.9113 13.5337 15.8928C13.1848 15.8743 12.8361 15.9341 12.5133 16.0679C12.1905 16.2016 11.9018 16.406 11.6682 16.6659C11.4347 16.9258 11.2622 17.2347 11.1636 17.5699L11.0461 17.9674C10.7386 19.0111 9.26111 19.0111 8.95361 17.9674L8.83611 17.5686C8.73729 17.2337 8.5648 16.9251 8.33128 16.6655C8.09775 16.4058 7.8091 16.2017 7.48647 16.0681C7.16385 15.9345 6.81541 15.8747 6.4667 15.8932C6.11798 15.9117 5.77781 16.0079 5.47111 16.1749L5.10611 16.3749C4.15111 16.8936 3.10611 15.8499 3.62611 14.8936L3.82486 14.5299C3.9923 14.2231 4.08893 13.8827 4.10765 13.5337C4.12637 13.1847 4.06671 12.8359 3.93304 12.5129C3.79938 12.19 3.59511 11.9011 3.33521 11.6674C3.07532 11.4337 2.76639 11.2611 2.43111 11.1624L2.03236 11.0449C0.988613 10.7374 0.988613 9.25988 2.03236 8.95238L2.43111 8.83488C2.76587 8.73602 3.07429 8.56355 3.33379 8.33011C3.59329 8.09667 3.79732 7.80816 3.93093 7.4857C4.06454 7.16323 4.12436 6.81497 4.10601 6.4664C4.08766 6.11783 3.9916 5.77778 3.82486 5.47113L3.62486 5.10613C3.10611 4.15113 4.14986 3.10613 5.10611 3.62613L5.47111 3.82488C5.77781 3.99185 6.11798 4.08809 6.4667 4.10657C6.81541 4.12504 7.16385 4.06528 7.48647 3.93165C7.8091 3.79802 8.09775 3.59391 8.33128 3.33428C8.5648 3.07465 8.73729 2.76606 8.83611 2.43113L8.95361 2.03238Z"
                                        fill="#212529" />
                                </svg></span>User-Control-Panel</a></li>
                    <li><a href="/map/Spielerkarte.php" class="nav-link"><span><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.875 13.9999C3.93322 13.9223 4.00871 13.8593 4.09549 13.8159C4.18228 13.7725 4.27797 13.7499 4.375 13.7499H7.5C7.66576 13.7499 7.82473 13.8158 7.94194 13.933C8.05915 14.0502 8.125 14.2091 8.125 14.3749C8.125 14.5407 8.05915 14.6996 7.94194 14.8168C7.82473 14.9341 7.66576 14.9999 7.5 14.9999H4.6875L1.875 18.7499H18.125L15.3125 14.9999H12.5C12.3342 14.9999 12.1753 14.9341 12.0581 14.8168C11.9408 14.6996 11.875 14.5407 11.875 14.3749C11.875 14.2091 11.9408 14.0502 12.0581 13.933C12.1753 13.8158 12.3342 13.7499 12.5 13.7499H15.625C15.722 13.7499 15.8177 13.7725 15.9045 13.8159C15.9913 13.8593 16.0668 13.9223 16.125 13.9999L19.875 18.9999C19.9446 19.0928 19.9871 19.2032 19.9975 19.3188C20.0079 19.4344 19.9859 19.5506 19.934 19.6544C19.8821 19.7582 19.8023 19.8455 19.7036 19.9066C19.6048 19.9676 19.4911 19.9999 19.375 19.9999H0.625C0.50893 19.9999 0.395153 19.9676 0.296418 19.9066C0.197683 19.8455 0.117891 19.7582 0.0659833 19.6544C0.0140752 19.5506 -0.00789801 19.4344 0.00252572 19.3188C0.0129495 19.2032 0.0553583 19.0928 0.125 18.9999L3.875 13.9999Z"
                                        fill="#212529" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10 1.2499C9.50754 1.2499 9.01991 1.3469 8.56494 1.53535C8.10997 1.72381 7.69657 2.00003 7.34835 2.34825C7.00013 2.69647 6.72391 3.10987 6.53545 3.56484C6.347 4.01981 6.25 4.50745 6.25 4.9999C6.25 5.49236 6.347 5.97999 6.53545 6.43497C6.72391 6.88994 7.00013 7.30333 7.34835 7.65155C7.69657 7.99977 8.10997 8.276 8.56494 8.46445C9.01991 8.65291 9.50754 8.7499 10 8.7499C10.9946 8.7499 11.9484 8.35481 12.6517 7.65155C13.3549 6.94829 13.75 5.99446 13.75 4.9999C13.75 4.00534 13.3549 3.05151 12.6517 2.34825C11.9484 1.64499 10.9946 1.2499 10 1.2499ZM5 4.9999C5.00009 4.03769 5.27782 3.09593 5.79987 2.28764C6.32191 1.47935 7.0661 0.838868 7.94313 0.443036C8.82016 0.0472048 9.79278 -0.0871568 10.7443 0.0560737C11.6958 0.199304 12.5857 0.614043 13.3074 1.25052C14.029 1.887 14.5517 2.71819 14.8126 3.64435C15.0736 4.5705 15.0617 5.55228 14.7786 6.47189C14.4954 7.39149 13.9529 8.20985 13.2161 8.82877C12.4794 9.44769 11.5797 9.84088 10.625 9.96115V16.8749C10.625 17.0407 10.5592 17.1996 10.4419 17.3168C10.3247 17.4341 10.1658 17.4999 10 17.4999C9.83424 17.4999 9.67527 17.4341 9.55806 17.3168C9.44085 17.1996 9.375 17.0407 9.375 16.8749V9.9624C8.16621 9.81011 7.05461 9.2217 6.24902 8.3077C5.44343 7.39369 4.99928 6.21825 5 4.9999Z"
                                        fill="#212529" />
                                </svg></span>Spielerkarte</a></li>

                    <li><a href="#" class="nav-link"><span><svg width="20" height="17" viewBox="0 0 20 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.25 2.535C2.35625 2.0725 3.9425 1.57375 5.485 1.41875C7.1475 1.25125 8.5575 1.4975 9.375 2.35875V14.5413C8.20625 13.8788 6.725 13.7875 5.35875 13.925C3.88375 14.075 2.39625 14.5013 1.25 14.9388V2.535ZM10.625 2.35875C11.4425 1.4975 12.8525 1.25125 14.515 1.41875C16.0575 1.57375 17.6438 2.0725 18.75 2.535V14.9388C17.6025 14.5013 16.1163 14.0738 14.6413 13.9263C13.2738 13.7875 11.7938 13.8775 10.625 14.5413V2.35875ZM10 1.22875C8.76875 0.170004 6.98375 0.0125036 5.35875 0.175004C3.46625 0.366254 1.55625 1.015 0.36625 1.55625C0.257061 1.60591 0.164469 1.68594 0.0995263 1.78679C0.0345834 1.88764 3.32143e-05 2.00505 0 2.125L0 15.875C2.89525e-05 15.9796 0.0262964 16.0825 0.0763964 16.1743C0.126496 16.2661 0.198827 16.3438 0.286764 16.4004C0.3747 16.457 0.475431 16.4906 0.579729 16.4982C0.684028 16.5058 0.78856 16.487 0.88375 16.4438C1.98625 15.9438 3.7625 15.3425 5.48375 15.1688C7.245 14.9913 8.72125 15.2775 9.5125 16.265C9.57106 16.338 9.64527 16.3969 9.72965 16.4374C9.81402 16.4779 9.90642 16.4989 10 16.4989C10.0936 16.4989 10.186 16.4779 10.2704 16.4374C10.3547 16.3969 10.4289 16.338 10.4875 16.265C11.2788 15.2775 12.755 14.9913 14.515 15.1688C16.2375 15.3425 18.015 15.9438 19.1163 16.4438C19.2114 16.487 19.316 16.5058 19.4203 16.4982C19.5246 16.4906 19.6253 16.457 19.7132 16.4004C19.8012 16.3438 19.8735 16.2661 19.9236 16.1743C19.9737 16.0825 20 15.9796 20 15.875V2.125C20 2.00505 19.9654 1.88764 19.9005 1.78679C19.8355 1.68594 19.7429 1.60591 19.6337 1.55625C18.4437 1.015 16.5338 0.366254 14.6413 0.175004C13.0163 0.0112536 11.2313 0.170004 10 1.22875Z"
                                        fill="#212529" />
                                </svg></span>Regelwerk</a></li>
                    <li><a href="#" class="nav-link"><span><svg width="20" height="17" viewBox="0 0 20 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.25 2.535C2.35625 2.0725 3.9425 1.57375 5.485 1.41875C7.1475 1.25125 8.5575 1.4975 9.375 2.35875V14.5413C8.20625 13.8788 6.725 13.7875 5.35875 13.925C3.88375 14.075 2.39625 14.5013 1.25 14.9388V2.535ZM10.625 2.35875C11.4425 1.4975 12.8525 1.25125 14.515 1.41875C16.0575 1.57375 17.6438 2.0725 18.75 2.535V14.9388C17.6025 14.5013 16.1163 14.0738 14.6413 13.9263C13.2738 13.7875 11.7938 13.8775 10.625 14.5413V2.35875ZM10 1.22875C8.76875 0.170004 6.98375 0.0125036 5.35875 0.175004C3.46625 0.366254 1.55625 1.015 0.36625 1.55625C0.257061 1.60591 0.164469 1.68594 0.0995263 1.78679C0.0345834 1.88764 3.32143e-05 2.00505 0 2.125L0 15.875C2.89525e-05 15.9796 0.0262964 16.0825 0.0763964 16.1743C0.126496 16.2661 0.198827 16.3438 0.286764 16.4004C0.3747 16.457 0.475431 16.4906 0.579729 16.4982C0.684028 16.5058 0.78856 16.487 0.88375 16.4438C1.98625 15.9438 3.7625 15.3425 5.48375 15.1688C7.245 14.9913 8.72125 15.2775 9.5125 16.265C9.57106 16.338 9.64527 16.3969 9.72965 16.4374C9.81402 16.4779 9.90642 16.4989 10 16.4989C10.0936 16.4989 10.186 16.4779 10.2704 16.4374C10.3547 16.3969 10.4289 16.338 10.4875 16.265C11.2788 15.2775 12.755 14.9913 14.515 15.1688C16.2375 15.3425 18.015 15.9438 19.1163 16.4438C19.2114 16.487 19.316 16.5058 19.4203 16.4982C19.5246 16.4906 19.6253 16.457 19.7132 16.4004C19.8012 16.3438 19.8735 16.2661 19.9236 16.1743C19.9737 16.0825 20 15.9796 20 15.875V2.125C20 2.00505 19.9654 1.88764 19.9005 1.78679C19.8355 1.68594 19.7429 1.60591 19.6337 1.55625C18.4437 1.015 16.5338 0.366254 14.6413 0.175004C13.0163 0.0112536 11.2313 0.170004 10 1.22875Z"
                                        fill="#212529" />
                                </svg></span>Gesetze</a></li>
                </ul>
            </div>
            <div class="nav-main">
            <div class="nav-item dropdown">
                <a class="dropdown-toggle" id="toggleButton" href="#">
                    <img src="../images/flag1.png" alt="">
                </a>
                <ul class="dropdown-menu hidden" id="toggleContent">
                    <li><a class="dropdown-item" href="#"><img src="../images/flag1.png" alt=""></a></li>
                    <li><a class="dropdown-item" href="#"><img src="../images/flag2.png" alt=""></a></li>
                    <li><a class="dropdown-item" href="#"><img src="../images/flag3.png" alt=""></a></li>
                    <li><a class="dropdown-item" href="#"><img src="../images/flag4.png" alt=""></a></li>
                </ul>
            </div>
            <button class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
        </div>
    </header>
    <script src="../js/custom.js"></script>
<body>
<div id="map"></div>
<script type="text/javascript">
    var mapExtent = [1022.5, 1022.5,1022.5,1022.5];
    var mapMinZoom = 1;
    var mapMaxZoom = 3;
    var mapMaxResolution = 1;
    var mapMinResolution = Math.pow(2, mapMaxZoom) * mapMaxResolution;
    var tileExtent = [0,0,0,0];
    var crs = L.CRS.Simple;
    crs.transformation = new L.Transformation(1, 0, 1, 0);
    crs.scale = function(zoom) {
        return Math.pow(2, zoom) / mapMinResolution;
    };
    crs.zoom = function(scale) {
        return Math.log(scale * mapMinResolution) / Math.LN2;
    };
    var layer;
    var map = new L.Map('map', {
        maxZoom: mapMaxZoom,
        minZoom: mapMinZoom,
        crs: crs
    });

    layer = L.tileLayer('images/tiles/sat.{z}.{x}.{y}.png', {
        minZoom: mapMinZoom, maxZoom: mapMaxZoom,
        attribution: '© Uniquelife - Online',
        noWrap: true,
        tms: false
    }).addTo(map);

    function mirrorNumbers(min, max, num) {
        j = (max - num) - (num - min);
        return num + j;
    }

    function formatTime(time) {
        let hours = parseInt(time, 10);
        return hours < 10 ? `0${hours}:00` : `${hours}:00`;
    }   

    function getIconForName(name) {
        if (name.toLowerCase().includes("burgershot")) {
            return icons.burgershot;
        } else if (name.toLowerCase().includes("strip")) {
            return icons.stripclub;
        } else if (name.toLowerCase().includes("cluckin")) {
            return icons.chicken;
        } else if (name.toLowerCase().includes("pizza")) {
            return icons.pizza;
        } else if (name.toLowerCase().includes("ammunation")) {
            return icons.ammunation;
        } else if (["autohaus", "gebrauchtwagen"].some(keyword => name.toLowerCase().includes(keyword))) {
            return icons.car;
        } else if (name.toLowerCase().includes("fahrzeugverleih")) {
            return icons.car2;
        } else if (name.toLowerCase().includes("tankstelle")) {
            return icons.tankstelle;
        } else if (["clothes", "binco"].some(keyword => name.toLowerCase().includes(keyword))) {
            return icons.clotheshop;
        } else if (name.toLowerCase().includes("gym")) {
            return icons.gym;
        } else if (name.toLowerCase().includes("24/7")) {
            return icons.fourseven;
        } else if (name.toLowerCase().includes("customs")) {
            return icons.tuning;
        } else {
            return null; 
        }
    }

    function AddBusinessToMap(x, y, name, owner, id, price, openFrom, openTo, customIcon = null) 
    {
        const mapSideLength = 2045.0;
        const topLeftX = -2990.0;
        const topLeftY = 3000.0;
        x = mirrorNumbers(0.0, mapSideLength, (x / topLeftX) * mapSideLength) / 2.0;
        y = mirrorNumbers(0.0, mapSideLength, (y / topLeftY) * mapSideLength) / 2.0;
        console.log('Adding marker at:', y, x);
        const markerOptions = customIcon ? { icon: customIcon } : {};
        const formattedPrice = parseFloat(price).toLocaleString();
        const formattedOpenFrom = formatTime(openFrom);
        const formattedOpenTo = formatTime(openTo);
        var popupContent = `<strong>${name} (ID: ${id})</strong><br>`;
        if (owner === 'Niemand') {
            popupContent += `Kaufpreis: <span style="color: green; font-weight: bold;">$ ${formattedPrice}</span><br>`;
        } else {
            popupContent += `Besitzer: ${owner}<br>`;
        }
        popupContent += `Öffnungszeiten: ${formattedOpenFrom} Uhr bis ${formattedOpenTo} Uhr`;
        console.log('Popup Content:', popupContent); 
        L.marker([y, x], markerOptions).addTo(GROUP_BIZ)
        .bindPopup(popupContent)
        .openPopup();
    }

    function getIconForGarage(type) {
    switch (type) {
        case 0:
            return icons.g1;
        case 1:
            return icons.chicken;
        case 2:
            return icons.pizza;
        case 3:
            return icons.fourseven;
        default:
            return null;
    }
}
function AddGarageToMap(x, y, owner, id, price, customIcon = null, type) {
    const mapSideLength = 2045.0;
    const topLeftX = -2990.0;
    const topLeftY = 3000.0;

    // Berechnung der Koordinaten
    x = mirrorNumbers(0.0, mapSideLength, (x / topLeftX) * mapSideLength) / 2.0;
    y = mirrorNumbers(0.0, mapSideLength, (y / topLeftY) * mapSideLength) / 2.0;

    console.log('Adding marker at:', y, x);
    // Erstellen der Marker-Optionen
    const markerOptions = customIcon ? { icon: customIcon } : {};

    // Formatieren des Kaufpreises
    const formattedPrice = parseFloat(price).toLocaleString();


    // Popup-Inhalt anpassen
    var garage = "";
    switch (type) {
    case 0:
        garage = "Mini-Garage";
        break;
    case 1:
        garage = "Hallen-Garage";
        break;
    case 2:
        garage = "Klein-Garage";
        break;
    default:
        garage = "Unbekannte Garage";
        break;
    }

    var popupContent = `<strong>${garage} (ID: ${id})</strong><br>`;
    if (owner === 'Niemand') {
        popupContent += `Kaufpreis: <span style="color: green; font-weight: bold;">$ ${formattedPrice}</span><br>`;
    } else {
        popupContent += `Besitzer: ${owner}<br>`;
    }

    console.log('Popup Content:', popupContent); // Debugging


// Füge Marker zur Gruppe hinzu
    L.marker([y, x], markerOptions).addTo(GROUP_GAR)

    .bindPopup(popupContent)
    .openPopup();
    }

    //Gruppen

    const icons = {
    burgershot: L.icon({
        iconUrl: 'images/icons/burgershot.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    stripclub: L.icon({
        iconUrl: 'images/icons/stripclub.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    g1: L.icon({
        iconUrl: 'images/icons/g1.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    chicken: L.icon({
        iconUrl: 'images/icons/chicken.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    pizza: L.icon({
        iconUrl: 'images/icons/pizza.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    fourseven: L.icon({
        iconUrl: 'images/icons/247.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    tuning: L.icon({
        iconUrl: 'images/icons/tuningshop.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    ammunation: L.icon({
        iconUrl: 'images/icons/ammunation.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    car: L.icon({
        iconUrl: 'images/icons/car.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    car2: L.icon({
        iconUrl: 'images/icons/car2.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    tankstelle: L.icon({
        iconUrl: 'images/icons/tankstelle.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    clotheshop: L.icon({
        iconUrl: 'images/icons/clotheshop.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    }),
    gym: L.icon({
        iconUrl: 'images/icons/gym.png',
        iconSize: [16, 16],
        iconAnchor: [8, 8],
        popupAnchor: [0, -8]
    })
    };
    //Gruppen
    const GROUP_BIZ = L.layerGroup();
    const GROUP_IMO = L.layerGroup();
    const GROUP_GAR = L.layerGroup();
    const GROUP_PUB = L.layerGroup();


    // Marker-Daten von der PHP-Datei abrufen
    fetch('getBusiness.php')
    .then(response => response.json())
    .then(data => {
        console.log('Fetched markers:', data); // Überprüfe die Daten in der Konsole
        data.forEach(marker => {
            // Konvertiere X und Y von String zu Zahl
            const x = parseFloat(marker.X);
            const y = parseFloat(marker.Y);
            // Konvertiere ID von String zu Zahl
            const id = parseInt(marker.ID, 10);
            // Lese BizPreis und Öffnungszeiten
            const price = marker.BizPreis;
            const openFrom = marker.OffenVon; // Neues Feld
            const openTo = marker.OffenBis; // Neues Feld

            // Wähle das passende Icon basierend auf dem Namen
            const customIcon = getIconForName(marker.BizName);

            // Überprüfe die Koordinaten, ID und Preis
            console.log('Parsed coordinates:', x, y);
            console.log('Parsed ID:', id);
            console.log('Parsed price:', price);
            console.log('Parsed openFrom:', openFrom);
            console.log('Parsed openTo:', openTo);
            AddBusinessToMap(x, y, marker.BizName, marker.BizBesitzer, id, price, openFrom, openTo, customIcon);
            
        });
    
    })
    .catch(error => console.error('Error fetching markers:', error));

    fetch('getGarage.php')
    .then(response => response.json())
    .then(data => {
        console.log('Fetched markers:', data); // Überprüfe die Daten in der Konsole
        data.forEach(marker => {
            // Konvertiere X und Y von String zu Zahl
            const x = parseFloat(marker.X);
            const y = parseFloat(marker.Y);
            // Konvertiere ID von String zu Zahl
            const id = parseInt(marker.ID, 10);
            // Lese BizPreis und Öffnungszeiten
            const price = marker.Kaufpreis;
            const type = parseInt(marker.InteriorType, 10);

            // Wähle das passende Icon basierend auf dem Namen
            const customIcon = getIconForGarage(type);

            // Überprüfe die Koordinaten, ID und Preis
            console.log('Parsed coordinates:', x, y);
            console.log('Parsed ID:', id);
            console.log('Parsed price:', price);
            AddGarageToMap(x, y, marker.Besitzer_Name, id, price, customIcon, type);
            
        });
    
    })
    .catch(error => console.error('Error fetching markers:', error));

    map.fitBounds([
        crs.unproject(L.point(mapExtent[2], mapExtent[3])),
        crs.unproject(L.point(mapExtent[0], mapExtent[1]))
    ]);


    L.control.layers(null, {
    "Geschäfte": GROUP_BIZ,
    "Immobilien": GROUP_IMO,
    "Garagen": GROUP_GAR,
    "Öffentliche Orte": GROUP_PUB

    }).addTo(map);
    GROUP_BIZ.addTo(map);
    GROUP_GAR.addTo(map);
    
</script>
</body>
</html>

