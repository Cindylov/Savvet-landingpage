<?php
    // Get protocol (http or https)
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

    // Get the host name
    $host = $_SERVER['HTTP_HOST'];
    
    // $host = $_SERVER['HTTP_REFERER'];

    // echo '<pre>';
    // var_dump($_SERVER);
    // echo '</pre>';
    
    // Get the base URL with /waitlist
    $form_url = $protocol . '://' . $host . '/savvet-landingpage/waitlist';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savvet</title>
    <link rel="stylesheet" href="output.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/images/Savvet_logo.png" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Odor+Mean+Chey&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Odor+Mean+Chey&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Oldenburg&display=swap" rel="stylesheet">

    <!-- animate css cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- bootstrap-icons cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- swiper cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

</head>

<body class="scrollbar-hidden">
    <!-- <div class="text-center bg-primary2 text-primary1 font-odorMeanChey">
        Testing the tailwind pls delete
    </div> -->


    <!-- hero section -->
    <section class="bg-primary3 md:pb-[50px] pb-[10px]">
        <!-- nav menu -->
        <div class="mx-auto">
            <div class="flex text-custom-16 md:text-custom-24 pl-[16px] md:pl-[40px] font-medium py-[16px] w-fit cursor-pointer"
                id="menuBtn">
                <img src="./assets/images/Savvet_ menu horizontal.svg" alt="" class="w-[20px] md:w-[28px]">
                <span class="uppercase font-raleway ml-[8px]">menu</span>
            </div>
            <div class="relative">
                <div class="font-medium font-raleway bg-white w-fit justify-around py-[16px] px-[16px] md:px-[40px] rounded-br-[12px] flex-col lg:flex-row hidden fixed top-0 z-30 text-custom-16 md:text-custom-24 shadow lg:items-center transition-all duration-300 transform opacity-0 scale-90"
                    id="menuList">
                    <span class="flex items-center cursor-pointer navbar-link w-fit" id="closeMenuBtn">
                        <img src="./assets/images/Savvet_ Close icon.svg" alt="" class="mr-[8px] w-[20px] md:w-[28px]">
                        close
                    </span>

                    <!-- line -->
                    <span>
                        <img src="./assets/images/Line_md.svg" alt="" class="md:hidden my-[8px] md:my-0">
                    </span>
                    <span>
                        <img src="./assets/images/Line_mobile.svg" alt=""
                            class="hidden md:block lg:hidden md:my-[16px] lg:my-0">
                    </span>
                    <span>
                        <img src="./assets/images/Line_vertical.svg" alt="" class="hidden lg:block lg:px-[30px]">
                    </span>

                    <a href="<?php echo $form_url ?>" class="relative navbar-link w-fit"> join our waitlist</a>

                    <!-- line -->
                    <span>
                        <img src="./assets/images/Line_md.svg" alt="" class="md:hidden my-[8px] md:my-0">
                    </span>
                    <span>
                        <img src="./assets/images/Line_mobile.svg" alt=""
                            class="hidden md:block lg:hidden md:my-[16px] lg:my-0">
                    </span>
                    <span>
                        <img src="./assets/images/Line_vertical.svg" alt="" class="hidden lg:block lg:px-[30px]">
                    </span>

                    <a href="mailto:Joan.amadasun@savvet.com" class="relative navbar-link w-fit">join our newsletter</a>
                    <img src="./assets/images/nav_hover_red_tape.svg" alt=""
                        class="absolute transition-all duration-500 ease-out -z-10" id="hoverImage">
                </div>
            </div>
        </div>


        <div class="relative px-2 mx-auto w-fit md:px-0 lg:pt-[52px] md:pt-[64px] pt-[44px]">
            <h1
                class="text-center font-odorMeanChey text-primary1 line text-custom-48 md:text-custom-53 leading-custom-67 md:leading-custom-74 min-w-[350px] overflow-hidden">
                find hidden<br class="md:hidden">
                <span class="inline-block text-shadow text-primary2" id="locationText">
                    location
                </span>
                gems<br class=""> & real reviews<br class="md:hidden"> for places<br class="lg:hidden"> around you
                <span class="relative">
                    !
                    <span class="absolute top-[10px] left-0 z-30 md:hidden">!</span>
                    <img src="./assets/images/Ellipse_no_shadow.svg" alt=""
                        class="absolute left-[2px] w-[10px] bottom-[27px] shadow-dotShadow rounded-xl">
                </span>
            </h1>

            <!-- lg devices -->
            <img src="./assets/images/empty_note.svg" alt=""
                class="absolute bottom-[-42px] left-[-80px] hidden lg:block">
            <img src="./assets/images/curvy_red_line.svg" alt=""
                class="absolute bottom-[-0.27rem] left-[5.2rem] hidden lg:block">
            <div class="absolute bottom-[-63px] right-[375px] z-20 hidden lg:block">
                <div class="relative w-fit" id="noteDiv">
                    <img src="./assets/images/zigzag_note.svg" class="" alt="">
                    <img src="./assets/images/x marks the perfect spot.svg" alt=""
                        class="absolute left-[25px] top-[18px]" id="perfectSpotText">
                    <img src="./assets/images/Vector 29.svg" alt=""
                        class="absolute top-[43px] right-[43px] opacity-50 transition-all duration-500"
                        id="rightStroke">
                    <img src="./assets/images/Vector 30.svg" alt=""
                        class="absolute top-[43px] right-[43px] opacity-50 transition-all duration-500" id="leftStroke">
                </div>
            </div>
            <!-- md devices -->
            <img src="./assets/images/empty_note.svg" alt=""
                class="absolute bottom-[22px] left-[-26px] hidden md:block lg:hidden">
            <img src="./assets/images/curvy_red_line.svg" alt=""
                class="absolute bottom-[70px] left-[107px] hidden md:block lg:hidden">
            <div class="absolute bottom-[13px] right-[35px] z-20 hidden md:block lg:hidden">
                <div class="relative w-fit" id="noteDivMd">
                    <img src="./assets/images/zigzag_note.svg" class="" alt="">
                    <img src="./assets/images/x marks the perfect spot.svg" alt=""
                        class="absolute left-[25px] top-[18px]" id="perfectSpotTextMd">
                    <img src="./assets/images/Vector 29.svg" alt="" class="absolute top-[43px] right-[43px] opacity-50"
                        id="rightStrokeMd">
                    <img src="./assets/images/Vector 30.svg" alt="" class="absolute top-[43px] right-[43px] opacity-50"
                        id="leftStrokeMd">
                </div>
            </div>
            <!-- mobile devices -->
            <img src="./assets/images/empty_note_short.svg" alt="" class="absolute bottom-[90px] left-[-7px] md:hidden">
            <div class="relative overflow-hidden w-fit h-fit">
                <img src="./assets/images/curvy_line_short.svg" alt=""
                    class="curvy-line absolute bottom-[134px] left-[122px] md:hidden">
            </div>
            <div class="absolute bottom-[15px] right-[22px] z-20 md:hidden">
                <div class="relative w-fit" id="noteDivSm">
                    <img src="./assets/images/zigzag_note.svg" class="" alt="">
                    <img src="./assets/images/x marks the perfect spot.svg" alt=""
                        class="absolute left-[25px] top-[18px]" id="perfectSpotTextSm">
                    <img src="./assets/images/Vector 29.svg" alt="" class="absolute top-[43px] right-[43px] opacity-50"
                        id="rightStrokeSm">
                    <img src="./assets/images/Vector 30.svg" alt="" class="absolute top-[43px] right-[43px] opacity-50"
                        id="leftStrokeSm">
                </div>
            </div>
        </div>

        <div class="relative lg:mt-[66px] md:mt-[40px] mt-[36px] w-fit mx-auto px-2 md:px-0">
            <!-- texts -->
            <img src="./assets/images/discover hidden spots and locations that fit your vibe & budget. Savvet’s here to help you explore with confidence. .svg"
                alt="" class="hidden lg:block">
            <img src="./assets/images/discover hidden spots and locations that fit your vibe & budget. Savvet’s here to help you explore with confidence_tab .svg"
                alt="" class="hidden md:block lg:hidden">
            <img src="./assets/images/discover hidden spots and locations that fit your vibe & budget. Savvet’s here to help you explore with confidence_mobile.svg"
                alt="" class="md:hidden">

            <!-- tapes -->
            <img src="./assets/images/red_tape.svg" alt=""
                class="absolute lg:top-[-2px] lg:right-[-73px] lg:block hidden">
            <img src="./assets/images/red_tape.svg" alt=""
                class="absolute md:left-[-41px] md:top-[35px] hidden md:block lg:hidden">
            <img src="./assets/images/red_tape_short.svg" alt="" class="absolute left-[-10px] top-[75px] md:hidden">
        </div>

        <div class="lg:mt-[60px] md:mt-[80px] mt-[48px] flex justify-center px-2 md:px-0">
            <div class="mx-auto lg:h-[92px] lg:w-[421px] md:h-[72px] md:w-[664px] h-[60px] w-[358px] relative">
                <a href="<?php echo $form_url ?>"
                    class="lg:h-[92px] lg:w-[421px] md:h-[72px] md:w-[664px] h-[60px] w-[358px] bg-primary2 rounded-[20px] text-white font-raleway font-extrabold text-[24px] flex justify-center items-center waitlist-btn absolute z-10">
                    <span>Join the waitlist today</span> 
                </a>
                <div class="lg:h-[92px] lg:w-[421px] md:h-[72px] md:w-[664px] h-[60px] w-[358px] bg-primary1 rounded-[20px] absolute top-[4px] left-[3px]"></div>                
            </div>
        </div>

        <div class="md:mt-[30px] mt-[10px] mx-auto max-w-[1431px] relative overflow-hidden">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        
                        <span class="absolute left-[138px] top-[50px] lg:top-[30px] lg:z-20 scroll-item" id="textRedTape">
                            <img src="./assets/images/red_tape_270deg.svg" alt="">
                        </span>
                        <div class="relative h-[300px] overflow-hidden z-40" id="textSpace">
                            <div class="flex ml-[89px] gap-[48px] flex-nowrap scrollbar-hidden max-w-[1440px] mx-auto">
                                <span
                                    class="absolute top-[64px] z-20 flex-shrink-0 transition text-custom-53 text-primary2 font-odorMeanChey text-shadow text-nowrap scroll-item"
                                    id="firstText">
                                    real reviews
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 text-customYellow font-odorMeanChey text-shadow left-[410px] top-[64px] text-nowrap scroll-item"
                                    id="secondText">
                                    explore places
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 font-odorMeanChey text-hover1 text-shadow left-[780px] top-[64px] text-nowrap scroll-item"
                                    id="thirdText">
                                    community ratings
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 font-odorMeanChey text-customBlue text-shadow left-[1270px] top-[64px] text-nowrap scroll-item"
                                    id="fourthText">
                                    gems
                                </span>
                            </div>
            
                            <div class="flex gap-[48px] scrollbar-hidden ml-[21px] max-w-[1440px] mx-auto">
                                <span class="absolute lg:bottom-[64px] bottom-[80px] flex-shrink-0 scroll-item" id="fifthText">
                                    <img src="./assets/images/exposed.svg" alt="" class="mb-[-15px]">
                                    <span class="text-custom-53 font-odorMeanChey text-customSky text-shadow text-nowrap">hidden
                                        rules</span>
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 font-odorMeanChey text-hover1 text-shadow lg:bottom-[64px] bottom-[80px] left-[350px] text-nowrap scroll-item"
                                    id="sixthText">
                                    find locations
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 font-odorMeanChey text-customOrange text-shadow lg:bottom-[64px] bottom-[80px] left-[710px] text-nowrap scroll-item"
                                    id="seventhText">
                                    cool new spots
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 text-primary2 font-odorMeanChey text-shadow lg:bottom-[64px] bottom-[80px] left-[1100px] text-nowrap scroll-item"
                                    id="eightText">
                                    real reviews
                                </span>
            
                            </div>
            
                        </div>
                                        
                    </div>
                    <div class="swiper-slide">
                        
                        <span class="absolute left-[138px] top-[50px] lg:top-[30px] lg:z-20 scroll-item" id="textRedTape">
                            <img src="./assets/images/red_tape_270deg.svg" alt="">
                        </span>
                        <div class="relative h-[300px] overflow-hidden" id="textSpace">
                            <div class="flex ml-[89px] gap-[48px] flex-nowrap scrollbar-hidden max-w-[1440px] mx-auto">
                                <span
                                    class="absolute top-[64px] z-20 flex-shrink-0 transition text-custom-53 text-primary2 font-odorMeanChey text-shadow text-nowrap scroll-item"
                                    id="firstText">
                                    real reviews
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 text-customYellow font-odorMeanChey text-shadow left-[410px] top-[64px] text-nowrap scroll-item"
                                    id="secondText">
                                    explore places
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 font-odorMeanChey text-hover1 text-shadow left-[780px] top-[64px] text-nowrap scroll-item"
                                    id="thirdText">
                                    community ratings
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 font-odorMeanChey text-customBlue text-shadow left-[1270px] top-[64px] text-nowrap scroll-item"
                                    id="fourthText">
                                    gems
                                </span>
                            </div>
            
                            <div class="flex gap-[48px] scrollbar-hidden ml-[21px] max-w-[1440px] mx-auto">
                                <span class="absolute lg:bottom-[64px] bottom-[80px] flex-shrink-0 scroll-item" id="fifthText">
                                    <img src="./assets/images/exposed.svg" alt="" class="mb-[-15px]">
                                    <span class="text-custom-53 font-odorMeanChey text-customSky text-shadow text-nowrap">hidden
                                        rules</span>
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 font-odorMeanChey text-hover1 text-shadow lg:bottom-[64px] bottom-[80px] left-[350px] text-nowrap scroll-item"
                                    id="sixthText">
                                    find locations
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 font-odorMeanChey text-customOrange text-shadow lg:bottom-[64px] bottom-[80px] left-[710px] text-nowrap scroll-item"
                                    id="seventhText">
                                    cool new spots
                                </span>
                                <span
                                    class="absolute flex-shrink-0 text-custom-53 text-primary2 font-odorMeanChey text-shadow lg:bottom-[64px] bottom-[80px] left-[1100px] text-nowrap scroll-item"
                                    id="eightText">
                                    real reviews
                                </span>
            
                            </div>
            
                        </div>
                                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video section -->
    <section class="overflow-hidden bg-videoSectionBg shadow-inner-custom">
        <div class="flex items-center justify-center w-full xl:h-[796px] md:h-[744px] h-[676px] max-w-[1440px] mx-auto">
            <div class="relative">
                <div
                    class="relative w-[294px] h-[476px] md:w-[300px] xl:w-[344px] md:h-[485px] xl:h-[532px] rounded-[7px] shadow-videoShadow overflow-hidden group" id="videoContainer">
                    <video class="h-[full] w-[full]" loop id="myVideo" playsinline>
                        <source src="./assets/videos/-6d19-4c96-a866-a1ad96a56631.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <button class="absolute z-40 transition-opacity duration-300 transform opacity-0 top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 group-hover:opacity-100" id="playPauseBtn">
                        <img src="./assets/images/play-icon.svg" alt="play" id="playPauseIcon">
                    </button>
                </div>

                <span
                    class="absolute font-raleway text-[64px] md:text-[120px] xl:text-[205px] text-primary4 font-extrabold text-nowrap top-[185px] left-[-35px] md:left-[-192px] md:top-[160px] xl:left-[-437px] xl:top-[130px] text-stroke-light -z-10 transition-transform duration-500 whitespace-nowrap min-w-max"
                    id="scale-out-text">is this you??</span>

                <span
                    class="absolute font-extrabold text-nowrap font-raleway text-[64px] md:text-[120px] xl:text-[205px] text-transparent md:text-stroke text-stroke-bold top-[185px] left-[-18px] md:top-[160px] md:left-[-25px] xl:left-[-25px] xl:top-[130px] transition-opacity duration-500 whitespace-nowrap min-w-max"
                    id="fade-out-text">
                    <span class=" md:hidden">s t</span><span class="xl:hidden">h</span>is yo<span
                        class="md:hidden">u?</span>
                </span>

                <!-- items that shows when on this scroll position -->
                <span class="absolute font-raleway text-primary4 text-[29px] font-extrabold top-[185px] lg:top-[250px] xl:top-[280px] left-[100px] duration-700 -z-10 transition-all opacity-0 text-nowrap" id="hidden-text">is this you??</span>
                <span class="absolute top-[280px] lg:top-[280px] xl:top-[310px] left-[-250px] opacity-0 transition duration-500" id="pop-out-img">
                    <img src="./assets/images/video_vector.svg" alt="">
                </span>
                <!-- video vector for md and sm devices -->
                <span class="absolute top-[-65px] left-[160px] md:top-[-80px] md:left-[165px] opacity-0 transition duration-500" id="pop-out-img-md">
                    <img src="./assets/images/video_vector_md.svg" alt="">
                </span>

                <span
                    class="items-center gap-[32px] absolute top-[500px] md:top-[520px] lg:top-[247px] xl:top-[277px] right-[60px] lg:right-[-255px] hidden opacity-0 transition duration-500"
                    id="prev-next-btn">
                    <!-- previous btn -->
                    <button
                        class="font-raleway py-[8px] pr-[10px] border-[1px] border-customOrange rounded-[11px] text-video-btn-color flex justify-end items-center font-normal group transition-all duration-300 w-[80px]">
                        <span class="relative">
                            <!-- Default short arrow -->
                            <img src="./assets/images/short-left-arrow.svg" alt="Short arrow"
                                class="mr-[4px] transition-all duration-500 group-hover:opacity-0 group-hover:hidden" />
                            <!-- Long arrow on hover -->
                            <img src="./assets/images/long-left-arrow.svg" alt="Long arrow"
                                class="hidden transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:block mr-[4px]" />
                        </span>
                        <span>Prev</span>
                    </button>

                    <!-- next btn -->
                    <button
                        class="font-raleway py-[8px] pl-[10px] border-[1px] border-customOrange rounded-[11px] text-video-btn-color flex items-center font-normal group transition-all duration-300 w-[80px]">
                        <span class="mr-[4px]">Next</span>
                        <span class="relative">
                            <img src="./assets/images/short-left-arrow.svg" alt=""
                                class="transition-all duration-500 rotate-180 group-hover:opacity-0 group-hover:hidden">

                            <!-- Long arrow on hover -->
                            <img src="./assets/images/long-right-arrow.svg" alt="Long arrow"
                                class="hidden transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:block" />
                        </span>
                    </button>
                </span>
            </div>
        </div>
    </section>

    <section class="bg-primary3 xl:pt-[140px] md:pt-[84px] pt-[64px] xl:pb-[120px] md:pb-[100px] pb-[80px]">
        <div
            class="justify-center flex items-center max-w-[1440px] mx-auto gap-[14px] md:gap-[34px] flex-col xl:flex-row px-3 relative">
            <!-- left  -->
            <div class="bg-white border-2 border-black md:w-[560px] md:h-[362px] h-[400px] lg:flex-shrink-0 w-full">
                <img src="./assets/images/find_places_you_want.svg" alt=""
                    class="block mx-auto mt-[32px] mb-[15px] w-[260px] md:w-fit">
                <div
                    class="relative flex flex-col-reverse items-center md:justify-start md:flex-row md:pl-[30px] md:gap-[52px] gap-[80px]">

                    <img src="./assets/images/curly_arrow.svg" alt="arrow"
                        class="absolute md:left-[90px] md:bottom-[-50px] bottom-[24px] rotate-55 md:rotate-0 w-[120px] md:w-fit">
                    <p class="md:text-[16px] font-oldenBurg md:rotate-7.17 rotate-6 ml-[-130px] md:ml-0">Savvet’s got
                        you</p>

                    <div id="image-container" class="w-[260px] md:w-fit relative">
                        <img id="switch-image" src="./assets/images/map.svg" alt="location picture" class="w-fit">
                        <img src="./assets/images/location.svg" alt="" class="absolute right-[4.5rem] md:right-[6.6rem] md:top-8 top-2 z-20" id="location-img">
                        <span class="absolute font-caveat text-[3px] left-[4.7rem] top-6 z-10 span-3px">local egufe restaurant<br> Budget: N20k-N100k</span>
                        <span class="absolute font-caveat text-[2px] top-[3.2rem] left-16 text-center z-10 span-2px">quiet abandoned mansions<br>Budget: free</span>
                        <span class="absolute font-caveat text-[3px] top-[4.2rem] left-6 text-center z-10 span-3px">writers hub at state library<br>Budget: N7k</span>
                        <span class="absolute font-caveat text-[2px] bottom-16 left-4 text-center z-10 span-2px">Chinese expats club<br>Budget: Strictly by iv</span>
                        <span class="absolute font-caveat text-[2px] bottom-[3.7rem] left-[4.5rem] text-center z-10 span-2px">london’s underground club<br>Budget: 20-100pounds</span>
                        <span class="absolute font-caveat text-[3px] top-[3.9rem] left-[5.9rem] text-center z-10 span-3px">new lounge at banana island<br>Budget: minimum spend N150k</span>
                        <span class="absolute font-caveat text-[1.5px] bottom-4 left-[6.5rem] text-center z-10 span-1-5px">free charging spot for tesla<br> Budget: $80 weekly registration fee</span>
                        <span class="absolute font-caveat text-[3px] bottom-5 left-[9.5rem] text-center z-10 span-3px">cheap bushmeat market<br> Budget: at least N1500</span>
                        <span class="absolute font-caveat text-[1.5px] bottom-[1.2rem] right-[4.7rem] text-center z-10 span-1-5px">iKoyi hidden dna club<br> Budget: above $2k</span>
                        <span class="absolute font-caveat text-[3px] bottom-[1.3rem] right-5 text-center z-10 span-3px">daily buffet restaurant<br> Budget: N2k-N8k</span>
                        <span class="absolute font-caveat text-[2px] bottom-[4.5rem] right-10 text-center z-10 span-2px">serene beach house<br>Budget: N350k per night</span>
                        <span class="absolute font-caveat text-[5px] top-8 right-6 text-center z-10 span-5px">tech nomads hangout spot<br>Budget: $20-$100</span>
                        <span class="absolute font-caveat text-[1.5px] top-6 right-20 text-center z-10 span-1-5px">Chinese town<br>Budget: at least $15</span>
                        <span class="absolute font-caveat text-[3px] top-7 right-[7.4rem] text-center z-10 span-3px">tech nomads hangout spot<br>Budget: $20-$100</span>
                        <span class="absolute font-caveat text-[1.5px] bottom-[3.4rem] left-[8.3rem] text-center z-10 span-1-5px">uber rich cars racing centers<br>Budget: $45-$280 entrance fee</span>
                        <span class="absolute font-caveat text-[3px] bottom-[4.8rem] left-[9.3rem] text-center z-10 span-3px default">influencers hot zone<br>Budget: hold your bagsss</span>
                    </div>
                </div>
            </div>

            <!-- Right -->
            <div
                class="my-8 md:w-[614px] max-w-[334px] md:max-w-fit flex flex-col justify-between relative lg:flex-shrink">
                <img src="./assets/images/green_tape_lg.svg" alt="line"
                    class="absolute md:right-[20px] md:top-[-60px] right-[7px] top-[-22px] w-[74px] md:w-fit">
                <div class="w-full md:w-[549px] mb-[32px]">
                    <h3 class="text-[24px] md:text-[32px] font-raleway leading-[40px] text-center">“curate your
                        location<br class="md:hidden"> experiences. <br class="hidden md:block">Savvet’s here<br
                            class="md:hidden"> to help you worry less” </h3>
                </div>
                <p class="text-[20px] md:text-[24px] font-raleway">With Savvet, you can find, rate, vet, and explore
                    hidden or popular locations across the globe. Discover real reviews, ratings and shared experiences
                    to help guide <br>your hangout decisions. No padded or overhyped comments like other social media
                    platforms. Just real people sharing real reviews. </p>
            </div>
        </div>

        <div class="xl:mt-[99px] md:mt-[39px] mt-[14px] flex justify-center px-2">
            <div class="relative mx-auto lg:h-[92px] xl:w-[1240px] md:h-[72px] md:w-[664px] h-[60px] w-[358px]">
                <a href="<?php echo $form_url ?>"
                    class=" lg:h-[92px] xl:w-[1240px] md:h-[72px] md:w-[664px] h-[60px] w-[358px] bg-primary2 rounded-[20px] text-white font-raleway font-extrabold text-[24px] flex justify-center items-center waitlist-btn absolute z-10">
                    <span>Join the waitlist today</span> 
                </a>
                <div class="lg:h-[92px] xl:w-[1240px] md:h-[72px] md:w-[664px] h-[60px] w-[358px] bg-primary1 rounded-[20px] absolute left-[4px] top-[3px]"></div>                
            </div>
        </div>
    </section>

    <footer class="w-full h-auto p-[16px] md:p-[24px] footer">
        <div class="pt-[24px] md:pt-[16px] lg:pt-[20px] border-[3px] border-primary2 border-dashed px-3">
            <div class="flex justify-end me-[20px] md:me-[32px] lg:me-[28px]">
                <a href="https://www.tiktok.com/@savvetapp?_t=ZM-8st8pM7EXMk&_r=1" class="me-[12px]" target="_blank"
                    id="tiktokLink">
                    <img src="image/proicons_tiktok.svg" alt="tiktok">
                </a>
                <a href="https://www.instagram.com/savvetapp?igsh=MTEybjl5aWJvNGQ2aA==" class="me-[12px] target="_blank"
                    id="instagramLink">
                    <img src="image/basil_instagram-outline.svg" alt="instagram">
                </a>
                <a href="https://x.com/savvetapp?s=21&t=ejr46t4CznFGXqTG-eH4wg" target="_blank" class="me-[12px]
                    id="twitterLink">
                    <img src="image/proicons_x-twitter.svg" alt="twitter">
                </a>
                <a href="mailto:Joan.amadasun@savvet.com" target="_blank"
                    id="emailLink">
                    <img src="image/proicons_mail.svg" alt="email us">
                </a>
            </div>
            <div class="flex justify-center mt-[60px] md:mt-[50px] lg:mt-[44px] mb-[12px]">
                <img src="./assets/images/savvet_logo.svg" alt="logo">
            </div>
            <h2 class="mb-[45.82px] md:mb-[52.82px] text-[16px] text-center font-bold leading-[40px] font-raleway">Save
                and vet the world’s locations</h2>
            <div
                class="flex flex-col-reverse items-center justify-between md:flex-row mx-[28px] mb-[44px] gap-y-[32px]">
                <p class="text-[16px] font-raleway">2024 Savvet. All rights reserved.</p>
                
                <div class="relative w-[305px] md:w-[215px] h-[63px]">
                    <a 
                        href="" class="border-[1px] border-solid py-[8px] md:py-[20px] md:px-[32px] rounded-[24px] border-primary2 w-[300px] border-opacity-100 md:w-fit flex justify-center md:block bg-white text-primary1 font-raleway font-medium text-nowrap absolute z-10 left-0" id="newsletterBtn"
                    >
                        Join Our Newsletter
                    </a>
                    <div class="py-[8px] md:py-[20px] md:px-[32px] rounded-[24px] w-[300px] border-opacity-70 md:w-fit flex justify-center md:block bg-primary2 text-primary1 font-raleway font-medium absolute top-[6px] left-[5px] md:left-[6px] text-nowrap">
                        Join Our Newsletter
                    </div>                    
                </div>
                
            </div>
        </div>
    </footer>


    <script>
        // Select all waitlist buttons
        const waitlistBtns = document.querySelectorAll('.waitlist-btn');

        // Loop through each button and add an event listener
        waitlistBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Toggle classes for background color change
                btn.classList.add('bg-hover1', 'shadow-inner-custom1', 'border', 'border-primary1');
                btn.classList.remove('bg-primary2');
                // console.log('clicked');
            });
        });

        const newsletterBtn = document.getElementById('newsletterBtn');
        
        newsletterBtn.addEventListener('click', ()=>{
            newsletterBtn.classList.add('shadow-inner-custom1');
        })
        
        const video = document.getElementById('myVideo');
        const playPauseBtn = document.getElementById('playPauseBtn');
        const playPauseIcon = document.getElementById('playPauseIcon');
        const videoContainer = document.getElementById('videoContainer');

        // Function to update the button and icon based on video state
        function updateButtonState() {
            if (video.paused) {
                playPauseIcon.src = './assets/images/play-icon.svg'; // Show play icon
                playPauseIcon.alt = 'Play';
                playPauseBtn.classList.remove('opacity-0'); // Always show the play button
            } else {
                playPauseIcon.src = './assets/images/pause-icon.svg'; // Show pause icon
                playPauseIcon.alt = 'Pause';
                playPauseBtn.classList.add('opacity-0'); // Hide the pause button by default
            }
        }

        // Add hover behavior for the video container
        videoContainer.addEventListener('mouseenter', () => {
            if (!video.paused) {
                playPauseBtn.classList.remove('opacity-0'); // Show pause button on hover
            }
        });

        videoContainer.addEventListener('mouseleave', () => {
            if (!video.paused) {
                playPauseBtn.classList.add('opacity-0'); // Hide pause button when not hovering
            }
        });

        // Toggle play/pause on button click
        playPauseBtn.addEventListener('click', () => {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
            updateButtonState();
        });

        // Update button state when the video plays or pauses
        video.addEventListener('play', updateButtonState);
        video.addEventListener('pause', updateButtonState);

        // Initialize button state on page load
        updateButtonState();

        // logic to navigate videos
        document.addEventListener("DOMContentLoaded", function () {
            const videos = [
                "./assets/videos/-6d19-4c96-a866-a1ad96a56631.mp4",
                "./assets/videos/-6d19-4c96-a866-a1ad96a56631.mp4",
                "./assets/videos/-6d19-4c96-a866-a1ad96a56631.mp4"
            ];

            let currentIndex = 0;
            const videoElement = document.getElementById("myVideo");
            const prevBtn = document.querySelector("#prev-next-btn button:first-child");
            const nextBtn = document.querySelector("#prev-next-btn button:last-child");

            function updateVideo(index) {
                if (index >= 0 && index < videos.length) {
                    videoElement.src = videos[index];
                    videoElement.play();
                    updateButtonStyles();
                }
            }

            function updateButtonStyles() {
                // If first video, add border to "Prev" button
                if (currentIndex === 0) {
                    prevBtn.classList.add("border-disabled-btn-color", "text-disabled-btn-color");
                    prevBtn.classList.remove("group");
                    prevBtn.setAttribute("disabled", "true");
                    document.querySelector("#prev-next-btn button:first-child img:first-child").src = "./assets/images/short-left-arrow-disabled.svg";
                } else {
                    prevBtn.classList.remove("border-disabled-btn-color", "text-disabled-btn-color");
                    prevBtn.classList.add("group");
                    prevBtn.removeAttribute("disabled");
                    document.querySelector("#prev-next-btn button:first-child img:first-child").src = "./assets/images/short-left-arrow.svg";
                }

                // If last video, add border to "Next" button
                if (currentIndex === videos.length - 1) {
                    nextBtn.classList.add("border-disabled-btn-color", "text-disabled-btn-color");
                    nextBtn.classList.remove("group");
                    nextBtn.setAttribute("disabled", "true");
                    document.querySelector("#prev-next-btn button:last-child img:first-child").src = "./assets/images/short-left-arrow-disabled.svg";
                    document.querySelector("#prev-next-btn button:last-child img:first-child").style = "transform: rotate(180deg)";
                } else {
                    nextBtn.classList.remove("border-disabled-btn-color", "text-disabled-btn-color");
                    nextBtn.classList.add("group");
                    nextBtn.removeAttribute("disabled");
                    document.querySelector("#prev-next-btn button:last-child img:first-child").src = "./assets/images/short-left-arrow.svg";
                    document.querySelector("#prev-next-btn button:last-child img:first-child").style = "transform: rotate(180deg)";
                }
            }

            nextBtn.addEventListener("click", () => {
                if (currentIndex < videos.length - 1) {
                    currentIndex++;
                }
                updateVideo(currentIndex);
            });

            prevBtn.addEventListener("click", () => {
                if (currentIndex > 0) {
                    currentIndex--;
                }
                updateVideo(currentIndex);
            });

            // Initial state on page load
            updateButtonStyles();
        });


        
        // Get the location image element
        const locationImg = document.getElementById('location-img');

        // Select all text spans
        const textSpans = document.querySelectorAll('#image-container span');

        let defaultSpan = document.querySelector('#image-container span.default');
        let imgContainer = document.querySelector('#image-container');

        let mapContainer

        // Loop through each span and add a hover event
        textSpans.forEach((span) => {
            span.addEventListener('mouseenter', () => {

            // Remove default effect from the previously default span
            defaultSpan.classList.remove('default');
            // Get the span's position relative to its parent
            const rect = span.getBoundingClientRect();
            const containerRect = imgContainer.getBoundingClientRect();

            // Calculate the new position for location image
            const top = (rect.top - 55) - containerRect.top;
            const left = rect.left - containerRect.left;

            // Apply the new position with smooth transition
            locationImg.style.top = `${top}px`;
            locationImg.style.left = `${left}px`;
            });
        });

        imgContainer.addEventListener('mouseleave', ()=>{
            defaultSpan.classList.add('default');

            // Get the span's position relative to its parent
            const dRect = defaultSpan.getBoundingClientRect();
            const dContainerRect = imgContainer.getBoundingClientRect();

            // Calculate the new position for location image
            const top = (dRect.top - 55) - dContainerRect.top;
            const left = dRect.left - dContainerRect.left;

            // Apply the new position with smooth transition
            locationImg.style.top = `${top}px`;
            locationImg.style.left = `${left}px`;
        })
        
    </script>

    <script src="./script.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- marquee cdn js -->
    <!-- <script src="https://unpkg.com/marquee3000"></script> -->
</body>

</html>