<?php use Wise\Core\Application;?>
<!doctype html>
<html lang="<?php echo Application::$app->language->dictionary['Lang_Lang']; ?>" dir="<?php echo Application::$app->language->dictionary['Lang_Dir']; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo Application::$app->language->dictionary['Lang_Title']; ?></title>
    <link rel="stylesheet" href="<?php echo CSS . Application::$app->language->dictionary['Bootstrap']; ?>">
    <link rel="stylesheet" href="<?php echo CSS.'main.css'; ?>">
    <link rel="stylesheet" href="<?php echo CSS. Application::$app->language->dictionary['Lang_Css']; ?>">
    <meta name="description" content="<?php echo Application::$app->language->dictionary['Meta_Desc']; ?>" />
    <meta name="keywords" content="<?php echo Application::$app->language->dictionary['Meta_Key']; ?>" />
    <meta name="author" content="<?php echo Application::$app->language->dictionary['Meta_Author']; ?>" />
    <meta property="og:title" content="<?php echo Application::$app->language->dictionary['Lang_Title']; ?>" />
    <meta property="og:description" content="<?php echo Application::$app->language->dictionary['Meta_Desc']; ?>" />
    <meta property="og:url" content="<?php echo "https://" . $_SERVER["SERVER_NAME"] .DS. basename($_SERVER['REQUEST_URI']); ?>"/>
    <meta property="og:image" content="<?php echo IMG; ?><?php echo Application::$app->language->dictionary['Meta_Image']; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="<?php echo Application::$app->language->dictionary['Meta_Locale']; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@xDayeh" />
    <meta name="twitter:creator" content="@xDayeh" />
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="Telegram">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
        </symbol>
        <symbol id="Twitter">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </symbol>
        <symbol id="Reddit">
            <path d="M6.167 8a.831.831 0 0 0-.83.83c0 .459.372.84.83.831a.831.831 0 0 0 0-1.661zm1.843 3.647c.315 0 1.403-.038 1.976-.611a.232.232 0 0 0 0-.306.213.213 0 0 0-.306 0c-.353.363-1.126.487-1.67.487-.545 0-1.308-.124-1.671-.487a.213.213 0 0 0-.306 0 .213.213 0 0 0 0 .306c.564.563 1.652.61 1.977.61zm.992-2.807c0 .458.373.83.831.83.458 0 .83-.381.83-.83a.831.831 0 0 0-1.66 0z"/>
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.828-1.165c-.315 0-.602.124-.812.325-.801-.573-1.9-.945-3.121-.993l.534-2.501 1.738.372a.83.83 0 1 0 .83-.869.83.83 0 0 0-.744.468l-1.938-.41a.203.203 0 0 0-.153.028.186.186 0 0 0-.086.134l-.592 2.788c-1.24.038-2.358.41-3.17.992-.21-.2-.496-.324-.81-.324a1.163 1.163 0 0 0-.478 2.224c-.02.115-.029.23-.029.353 0 1.795 2.091 3.256 4.669 3.256 2.577 0 4.668-1.451 4.668-3.256 0-.114-.01-.238-.029-.353.401-.181.688-.592.688-1.069 0-.65-.525-1.165-1.165-1.165z"/>
        </symbol>
        <symbol id="Envelope">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
        </symbol>
        <symbol id="Github">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </symbol>
        <symbol id="Language">
            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
        </symbol>
    </svg>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm border-bottom p-0 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo URL_XP; ?>">
                <img src="<?php echo IMG; ?>wise.png" alt="Wise" width="24" height="24">
                <span><?php echo Application::$app->language->dictionary['Lang_Framework']; ?></span>
            </a>
            <button class="navbar-toggler px-1 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo htmlentities(basename($_SERVER['REQUEST_URI']))=='about' ? 'active' : ''; ?>" href="<?php echo URL_XP."about" ?>"><?php echo Application::$app->language->dictionary['Lang_About']; ?></a>
                    </li>
                </ul>
                <a href="/language" class="text-decoration-none text-dark px-2"><?php echo Application::$app->language->dictionary['Lang_Footer']; ?> <svg width="16" height="20"><use xlink:href="#Language"/></svg></a>
                <?php if (!Application::iGuest()): ?>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong><?php echo Application::$app->user->getDisplayName(); ?></strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/logout">Sign out</a></li>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row py-5">
            <?php if (Application::$app->session->getFlash('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo Application::$app->session->getFlash('success');  ?>
            </div>
            <?php endif; ?>
            {{content}}
        </div>
    </div>

    <footer class="fixed-bottom bg-light text-dark shadow border-top" id="Footer">
        <div class="container">
            <div class="row py-1">
                <div class="col fw-bold">
                    <small><?php echo Application::$app->language->dictionary['Copy'];?></small>
                    <div class="float-end">
                        <a class="text-dark text-decoration-none" href="https://t.me/#" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Telegram"/></svg>
                        </a>
                        <a class="text-dark text-decoration-none" href="https://twitter.com/xDayeh" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Twitter"/></svg>
                        </a>
                        <a class="text-dark text-decoration-none" href="https://www.reddit.com/user/AbuDayeh" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Reddit"/></svg>
                        </a>
                        <a class="text-dark text-decoration-none" href="mailto:e@hotmail.com" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Envelope"/></svg>
                        </a>
                        <a class="text-dark text-decoration-none" href="https://github.com/xDayeh" target="_blank">
                            <svg width="16" height="16"><use xlink:href="#Github"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo JS.'bootstrap.bundle.min.js'; ?>"></script>
    <script src="<?php echo JS.'main.js'; ?>"></script>
</body>
</html>