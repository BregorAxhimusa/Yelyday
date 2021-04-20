<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Views/assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="Views/assets/css/main.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="Views/assets/css/main.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- editor -->
    <link href="Views/assets/css/editor.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="Views/assets/css/jquery.dataTables.min.css">
    <!-- Time zone -->
    <link rel="stylesheet" href="Views/assets/css/jquery.timepicker.min.css">
    <!-- File uploader -->
    <link href="Views/assets/fileuploader/font/font-fileuploader.css" rel="stylesheet">
    <link href="Views/assets/fileuploader/jquery.fileuploader.min.css" media="all" rel="stylesheet">
    <link href="Views/assets/fileuploader/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">
    <!-- Date Picker -->
    <link href="Views/assets/css/datetimepicker.css" rel="stylesheet" crossorigin="anonymous" />
    <title>Yelyday | Dashboard</title>
</head>

<body class="bg-white ">
    <nav class="navbar navbar-expand-lg nav-cms">
        <div class="sidebar-heading text-center">
            <h1 class="mt-1">Yelyday</h1>
        </div>
        <div class="ml-5">
            <button class="btn f-focus border-0 d-lg-block d-none btn-toggle" type="button" id="sidebarCollapse">
                <img src="Views/assets/img/menu.svg" alt="no images">
            </button>
        </div>
        <button class="btn d-lg-none d-block f-focus btn-toggle" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <img src="Views/assets/img/menu.svg" alt="no images">
        </button>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="ml-lg-auto ml-0 d-flex">
                    <?php include('translate.php') ?>
                    <button class="btn d-md-block d-none f-focus btn-notification mr-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#translate" aria-expanded="false"
                        aria-controls="translate">
                        <img src="Views/assets/img/language.svg" alt="no images">
                    </button>
                    <button class="btn d-md-block d-none badge1 btn-notification f-focus mr-3" type="button"
                        data-badge="2" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false"
                        aria-controls="notification message">
                        <img src="Views/assets/img/notification.svg" alt="no images">
                    </button>

                </div>
                <div class="btn-group d-md-block d-none">
                    <button class="btn f-focus bg-transparent" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="Views/assets/img/marc.jpg" class="rounded-circle" height="40px" width="40px">
                        <span class="p-1">Bregor Axhimusa</span>
                        <img src="Views/assets/img/Icons - chevron-down.png" />
                    </button>
                    <ul class="dropdown-menu ml-5 span-box text-center">
                        <li>
                            <a class="dropdown-item dropdown-status">Status : <span
                                    class="green-online">Online</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="profile">Account settings</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <?php include('sidebar.php') ?>
        <div id="content" class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="collapse multi-collapse" id="notification">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <h5 class="p-2 td-notification">Notifications</h5>
                                    <table class="table table-md-responsive table-borderless">
                                        <tbody>
                                            <tr>
                                                <td colspan="3" class="">
                                                    <div class="row td-notification">
                                                        <div class="col-lg-2 mt-2">
                                                            <img src="Views/assets/img/avatar.jpg"
                                                                class="rounded-circle ml-3" width="100px" height="100px"
                                                                alt="">
                                                        </div>
                                                        <div class="col-lg-10 mt-2">
                                                            <h6>Bregor Axhimusa</h6>
                                                            <span>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit.
                                                                Commodi sed ullam nesciunt rem nobis, corporis cum hic
                                                                quo
                                                                minus numquam molestias voluptatibus. Accusamus a
                                                                blanditiis
                                                                perspiciatis cum, in provident atque.</span>
                                                            <p class="paragraph-notificaiton mt-3">4 min ago</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="notifications">
                                        <p>View all notifications</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="collapse" id="translate">
                            <div class="card mt-2">
                                <div class="card-body">
                                    <!-- GTranslate: https://gtranslate.io/ -->
                                    <a href="#" onclick="doGTranslate('en|sq');return false;" title="Albanian"
                                        class="gflag nturl" style="background-position: -300px -400px">
                                        <img src="//gtranslate.net/flags/blank.png" height="24" width="24"
                                            alt="Albanian" />
                                    </a>
                                    <a href="#" onclick="doGTranslate('en|en');return false;" title="English"
                                        class="gflag nturl" style="background-position: -0px -0px">
                                        <img src="//gtranslate.net/flags/blank.png" height="24" width="24"
                                            alt="English" />
                                    </a>
                                    <a href="#" onclick="doGTranslate('en|fr');return false;" title="French"
                                        class="gflag nturl" style="background-position: -200px -100px">
                                        <img src="//gtranslate.net/flags/blank.png" height="24" width="24"
                                            alt="French" />
                                    </a>
                                    <a href="#" onclick="doGTranslate('en|de');return false;" title="German"
                                        class="gflag nturl" style="background-position: -300px -100px">
                                        <img src="//gtranslate.net/flags/blank.png" height="24" width="24"
                                            alt="German" />
                                    </a>
                                    <select onchange="doGTranslate(this);">
                                        <option value="">Select Language</option>
                                        <option value="en|af">Afrikaans</option>
                                        <option value="en|sq">Albanian</option>
                                        <option value="en|ar">Arabic</option>
                                        <option value="en|hy">Armenian</option>
                                        <option value="en|az">Azerbaijani</option>
                                        <option value="en|eu">Basque</option>
                                        <option value="en|be">Belarusian</option>
                                        <option value="en|bg">Bulgarian</option>
                                        <option value="en|ca">Catalan</option>
                                        <option value="en|zh-CN">Chinese (Simplified)</option>
                                        <option value="en|zh-TW">Chinese (Traditional)</option>
                                        <option value="en|hr">Croatian</option>
                                        <option value="en|cs">Czech</option>
                                        <option value="en|da">Danish</option>
                                        <option value="en|nl">Dutch</option>
                                        <option value="en|en">English</option>
                                        <option value="en|et">Estonian</option>
                                        <option value="en|tl">Filipino</option>
                                        <option value="en|fi">Finnish</option>
                                        <option value="en|fr">French</option>
                                        <option value="en|gl">Galician</option>
                                        <option value="en|ka">Georgian</option>
                                        <option value="en|de">German</option>
                                        <option value="en|el">Greek</option>
                                        <option value="en|ht">Haitian Creole</option>
                                        <option value="en|iw">Hebrew</option>
                                        <option value="en|hi">Hindi</option>
                                        <option value="en|hu">Hungarian</option>
                                        <option value="en|is">Icelandic</option>
                                        <option value="en|id">Indonesian</option>
                                        <option value="en|ga">Irish</option>
                                        <option value="en|it">Italian</option>
                                        <option value="en|ja">Japanese</option>
                                        <option value="en|ko">Korean</option>
                                        <option value="en|lv">Latvian</option>
                                        <option value="en|lt">Lithuanian</option>
                                        <option value="en|mk">Macedonian</option>
                                        <option value="en|ms">Malay</option>
                                        <option value="en|mt">Maltese</option>
                                        <option value="en|no">Norwegian</option>
                                        <option value="en|fa">Persian</option>
                                        <option value="en|pl">Polish</option>
                                        <option value="en|pt">Portuguese</option>
                                        <option value="en|ro">Romanian</option>
                                        <option value="en|ru">Russian</option>
                                        <option value="en|sr">Serbian</option>
                                        <option value="en|sk">Slovak</option>
                                        <option value="en|sl">Slovenian</option>
                                        <option value="en|es">Spanish</option>
                                        <option value="en|sw">Swahili</option>
                                        <option value="en|sv">Swedish</option>
                                        <option value="en|th">Thai</option>
                                        <option value="en|tr">Turkish</option>
                                        <option value="en|uk">Ukrainian</option>
                                        <option value="en|ur">Urdu</option>
                                        <option value="en|vi">Vietnamese</option>
                                        <option value="en|cy">Welsh</option>
                                        <option value="en|yi">Yiddish</option>
                                        <option value="en|bn">Bengali</option>
                                        <option value="en|bs">Bosnian</option>
                                        <option value="en|ceb">Cebuano</option>
                                        <option value="en|eo">Esperanto</option>
                                        <option value="en|gu">Gujarati</option>
                                        <option value="en|ha">Hausa</option>
                                        <option value="en|hmn">Hmong</option>
                                        <option value="en|ig">Igbo</option>
                                        <option value="en|jw">Javanese</option>
                                        <option value="en|kn">Kannada</option>
                                        <option value="en|km">Khmer</option>
                                        <option value="en|lo">Lao</option>
                                        <option value="en|la">Latin</option>
                                        <option value="en|mi">Maori</option>
                                        <option value="en|mr">Marathi</option>
                                        <option value="en|mn">Mongolian</option>
                                        <option value="en|ne">Nepali</option>
                                        <option value="en|pa">Punjabi</option>
                                        <option value="en|so">Somali</option>
                                        <option value="en|ta">Tamil</option>
                                        <option value="en|te">Telugu</option>
                                        <option value="en|yo">Yoruba</option>
                                        <option value="en|zu">Zulu</option>
                                    </select>
                                    <div id="google_translate_element2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>