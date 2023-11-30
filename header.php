<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geeta Law College</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/dropdown.js"></script>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="preload" href="Elephant-Regular.woff2" as="font" type="font/woff2" crossorigin>

   
</head>

<body>

<header class="header1">
        <nav class="nav1">
            <ul>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="faqs.php">FAQs</a></li>
            </ul>
        </nav>
        <div class="logo">
            <img src="assets/images/logo-gil.png" alt="">
        </div>
        <div class="header-right-nav">
            <a class="admission" href="#">ADMISSION</a>
            <a id="nirf" href="assets/files/NIRF-2021-SUBMITTEDGEETA-INSTITUTE-OF-LAW20210209-.pdf">NIRF</a>
            <div class="menu">
                <button id="toggle-show">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </button>
            </div>
        </div>
    </header>
    <aside class="sidebar hidden">
        <div id="toggle-cross">
            <div class="line1"></div>
            <div class="line2"></div>
        </div>
        <ul>
            <li class="side-dropdown"><a href="#" onclick="return false">Our Faculty <i
                        class="arrow down toggle-menu"></i></a>
                <ul class="side-dropdown-content hidden">
                    <li class="side-sub-dropdown"><a onclick="return false">Our Promptors <i
                                class="arrow down toggle-sub-menu"></i></a>
                        <ul class="side-sub-dropdown-content  hidden">
                            <li><a href="our_chairman.php">Our Chairman</a></li>
                            <li><a href="our_vicechairman.php">Our Vice Chairman</a></li>
                        </ul>
                    </li>
                    <li><a href="our_principal.php">Our Principal</a></li>
                    <li><a href="academic_advisory.php">Academic Advisory Board</a></li>
                    <li><a href="industry_advisory.php">Industrial Advisory Board</a></li>
                    <li><a href="distinguished_professor.php">Distinguished Professor</a></li>
                    <li><a href="honorary_visiting_faculty.php">Honorary Professor</a></li>
                    <li><a href="faculty.php">Faculty</a></li>
                </ul>
            </li>
            <li class="side-dropdown"><a href="#" onclick="return false">Courses <i
                        class="arrow down toggle-menu"></i></a>
                <ul class="side-dropdown-content hidden">
                    <li><a href="ba_llb_5_years.php">BA. LL.B (Hons.) 5 Years</a></li>
                    <li><a href="bba_llb_5_years.php">BBA. LL.B (Hons.) 5 Years</a></li>
                    <li><a href="llb_3_years.php">LL.B (3 Years)</a></li>
                    <li><a href="llm_2_years.php">LL.M (2 Years)</a></li>
                </ul>
            </li>
            <li class="side-dropdown"><a href="#" onclick="return false">Academics <i
                        class="arrow down toggle-menu"></i></a>

                <ul class="side-dropdown-content hidden">
                    <li><a href="course_structure.php">Course Structure</a></li>
                    <li><a href="#">Fee Structure</a></li>
                    <li><a href="syllabus.php">Syllabus</a></li>
                    <li class="side-sub-dropdown"><a onclick="return false">Study Material <i
                                class="arrow down toggle-sub-menu"></i></a>
                        <ul class="side-sub-dropdown-content hidden" id="study-content">
                            <li><a href="ba_llb_1.php">B.A.LL.B 1ST SEMESTER</a></li>
                            <li><a href="ba_llb_2.php">B.A.LL.B 2ND SEMESTER</a></li>
                            <li><a href="bba_llb_1.php">BBA.LL.B 1ST SEMESTER</a></li>
                            <li><a href="bba_llb_2.php">BBA.LL.B 2ND SEMESTER</a></li>
                        </ul>
                    </li>
                    <li><a href="question_papers.php">Question Papers</a></li>
                    <li class="side-sub-dropdown"><a onclick="return false">Club <i
                                class="arrow down toggle-sub-menu"></i></a>
                        <ul class="side-sub-dropdown-content hidden" id="club-content">
                            <li><a href="moot_court_club.php">Moot Court Club</a></li>
                            <li><a href="internship_placement_club.php">Internship & Placement Club</a></li>
                            <li><a href="social_welfare_club.php">Social & Welfare Club</a></li>
                        </ul>
                    </li>
                    <li class="side-sub-dropdown"><a onclick="return false">Research Centers <i
                                class="arrow down toggle-sub-menu"></i></a>
                        <ul class="side-sub-dropdown-content hidden" id="research-content">
                            <li><a href="centre_criminal_justice_reforms.php">Centre for Criminal Justice Reforms</a></li>
                            <li><a href="centre_arbitration_mediation.php">Centre For Arbitration and Mediation</a></li>
                            <li><a href="centre_legal_aid_services.php">Centre for Legal Aid Services</a></li>
                            <li><a href="centre_research_innovation.php">Centre for Research and Innovation</a></li>
                            <li><a href="centre_south_asian_legal_studies.php">Centre for South Asian Legal Studies</a></li>
                            <li><a href="centre_intellectual_property_research_advanced_studies.php">Centre for Intellectual Property Research and Advanced Studies</a>
                            </li>
                            <li><a href="#">Centre for Social Research</a></li>
                            <li><a href="centre_environmental_studies.php">Centre for Environmental Studies</a></li>
                            <li><a href="centre_career_guidance.php">Centre for Career Guidance Studies</a></li>
                            <li><a href="centre_leadership.php">Centre for Leadership</a></li>
                            <li><a href="centre_forensic_science.php">Centre for Forensic Science</a></li>
                        </ul>
                    </li>
                    <li><a href="list_of_journals.php">List Of Journals</a></li>
                </ul>

            </li>
            <li class="side-dropdown"><a href="#" onclick="return false">Campus Life <i class="arrow down toggle-menu"></i></a>
                <ul class="side-dropdown-content hidden">
                    <li><a href="seminars.php">Seminars</a></li>
                    <li><a href="#">Moot Courts</a></li>
                    <li><a href="guest_lectures.php">Guest Lectures</a></li>
                    <li><a href="dignitaries_visited.php">Dignitaries Visited</a></li>
                    <li><a href="cultural_activities.php">Cultural Activities</a></li>
                    <li><a href="alumni_cell.php">Alumni Cell</a></li>
                    <li><a href="#">Class Events</a></li>
                </ul>
            </li>
            <li class="side-dropdown"><a href="#" onclick="return false">Infrastructure <i
                        class="arrow down toggle-menu"></i></a>
                <ul class="side-dropdown-content hidden">
                    <li><a href="#">Class Rooms</a></li>
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Moot Court Room</a></li>
                    <li><a href="#">IT Lab</a></li>
                    <li><a href="#">Auditorium</a></li>
                    <li><a href="#">Reception</a></li>
                    <li><a href="#">Conference Room</a></li>
                    <li><a href="#">Cafeteria</a></li>
                    <li><a href="#">Gymnasium</a></li>
                    <li><a href="#">Hostel</a></li>
                    <li><a href="#">Mess</a></li>
                    <li><a href="#">Transport</a></li>
                    <li><a href="#">WiFi</a></li>
                </ul>
            </li>
            <li class="side-dropdown"><a href="#" onclick="return false">Achievements <i
                        class="arrow down toggle-menu"></i></a>
                <ul class="side-dropdown-content hidden">
                    <li><a href="#">Rankings</a></li>
                    <li><a href="#">Moot Court Winner</a></li>
                    <li><a href="#">Other Competition-winning Positions</a></li>
                    <li><a href="#">Other Programs and Achievements</a></li>
                    <li><a href="#">Collaborations</a></li>
                    <li><a href="#">New Beginnings In The Campus</a></li>
                </ul>
            </li>
            <li class="side-dropdown"><a href="#" onclick="return false">Our Placement Program <i
                        class="arrow down toggle-menu"></i></a>
                <ul class="side-dropdown-content hidden">
                    <li><a href="#">Particum</a></li>
                    <li><a href="#">Centre for Career Guidance</a></li>
                    <li><a href="#">Alumni Cell</a></li>
                    <li><a href="#">Placements & Internships</a></li>
                    <li><a href="#">Internship-Fair</a></li>
                </ul>
            </li>
            <li class="side-dropdown"><a href="#" onclick="return false">ERP <i class="arrow down toggle-menu"></i></a>
                <ul class="side-dropdown-content hidden">
                    <li><a href="#">ERP Login</a></li>
                    <li><a href="#">Student Login</a></li>
                    <li><a href="#">Parent Login</a></li>
                    <li><a href="#">Faculty Login</a></li>
                </ul>
            </li>
        </ul>
    </aside>
    <header class="header2">
        <nav class="nav2">
            <ul>
                <li class="dropdown"><a href="#">Our Faculty <i class="arrow down"></i></a>
                    <ul class="dropdown-content">
                        <li class="sub-dropdown"><a>Our Promptors <i class="arrow right"></i></a>
                            <ul class="sub-dropdown-content" id="promptors-content">
                                <li><a href="our_chairman.php">Our Chairman</a></li>
                                <li><a href="our_vicechairman.php">Our Vice Chairman</a></li>
                            </ul>
                        </li>
                        <li><a href="our_principal.php">Our Principal</a></li>
                        <li><a href="academic_advisory.php">Academic Advisory Board</a></li>
                        <li><a href="industry_advisory.php">Industrial Advisory Board</a></li>
                        <li><a href="distinguished_professor.php">Distinguished Professor</a></li>
                        <li><a href="honorary_visiting_faculty.php">Honorary Professor</a></li>
                        <li><a href="faculty.php">Faculty</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">Courses <i class="arrow down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="ba_llb_5_years.php">BA. LL.B (Hons.) 5 Years</a></li>
                        <li><a href="bba_llb_5_years.php">BBA. LL.B (Hons.) 5 Years</a></li>
                        <li><a href="llb_3_years.php">LL.B (3 Years)</a></li>
                        <li><a href="llm_2_years.php">LL.M (2 Years)</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">Academics <i class="arrow down"></i></a>

                    <ul class="dropdown-content">
                        <li><a href="course_structure.php">Course Structure</a></li>
                        <li><a href="#">Fee Structure</a></li>
                        <li><a href="syllabus.php">Syllabus</a></li>
                        <li class="sub-dropdown"><a>Study Material <i class="arrow right"></i></a>
                            <ul class="sub-dropdown-content" id="study-content">
                                <li><a href="ba_llb_1.php">B.A.LL.B 1ST SEMESTER</a></li>
                                <li><a href="ba_llb_2.php">B.A.LL.B 2ND SEMESTER</a></li>
                                <li><a href="bba_llb_1.php">BBA.LL.B 1ST SEMESTER</a></li>
                                <li><a href="bba_llb_2.php">BBA.LL.B 2ND SEMESTER</a></li>
                            </ul>
                        </li>
                        <li><a href="question_papers.php">Question Papers</a></li>
                        <li class="sub-dropdown"><a>Club <i class="arrow right"></i></a>
                            <ul class="sub-dropdown-content" id="club-content">
                                <li><a href="moot_court_club.php">Moot Court Club</a></li>
                                <li><a href="internship_placement_club.php">Internship & Placement Club</a></li>
                                <li><a href="social_welfare_club.php">Social & Welfare Club</a></li>
                            </ul>
                        </li>
                        <li class="sub-dropdown"><a>Research Centers <i class="arrow right"></i></a>
                            <ul class="sub-dropdown-content" id="research-content">
                                <li><a href="centre_criminal_justice_reforms.php">Centre for Criminal Justice Reforms</a></li>
                                <li><a href="centre_arbitration_mediation.php">Centre For Arbitration and Mediation</a></li>
                                <li><a href="centre_legal_aid_services.php">Centre for Legal Aid Services</a></li>
                                <li><a href="centre_research_innovation.php">Centre for Research and Innovation</a></li>
                                <li><a href="centre_south_asian_legal_studies.php">Centre for South Asian Legal Studies</a></li>
                                <li><a href="centre_intellectual_property_research_advanced_studies.php">Centre for Intellectual Property <br>Research and Advanced Studies</a>
                                </li>
                                <li><a href="#">Centre for Social Research</a></li>
                                <li><a href="centre_environmental_studies.php">Centre for Environmental Studies</a></li>
                                <li><a href="centre_career_guidance.php">Centre for Career Guidance Studies</a></li>
                                <li><a href="centre_leadership.php">Centre for Leadership</a></li>
                                <li><a href="centre_forensic_science.php">Centre for Forensic Science</a></li>
                            </ul>
                        </li>
                        <li><a href="list_of_journals.php">List Of Journals</a></li>
                    </ul>

                </li>
                <li class="dropdown"><a href="#">Campus Life <i class="arrow down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="seminars.php">Seminars</a></li>
                        <li><a href="#">Moot Courts</a></li>
                        <li><a href="guest_lectures.php">Guest Lectures</a></li>
                        <li><a href="dignitaries_visited.php">Dignitaries Visited</a></li>
                        <li><a href="cultural_activities.php">Cultural Activities</a></li>
                        <li><a href="alumni_cell.php">Alumni Cell</a></li>
                        <li><a href="#">Class Events</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">Infrastructure <i class="arrow down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="#">Class Rooms</a></li>
                        <li><a href="#">Library</a></li>
                        <li><a href="#">Moot Court Room</a></li>
                        <li><a href="#">IT Lab</a></li>
                        <li><a href="#">Auditorium</a></li>
                        <li><a href="#">Reception</a></li>
                        <li><a href="#">Conference Room</a></li>
                        <li><a href="#">Cafeteria</a></li>
                        <li><a href="#">Gymnasium</a></li>
                        <li><a href="#">Hostel</a></li>
                        <li><a href="#">Mess</a></li>
                        <li><a href="#">Transport</a></li>
                        <li><a href="#">WiFi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">Achievements <i class="arrow down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="#">Rankings</a></li>
                        <li><a href="#">Moot Court Winner</a></li>
                        <li><a href="#">Other Competition-winning Positions</a></li>
                        <li><a href="#">Other Programs and Achievements</a></li>
                        <li><a href="#">Collaborations</a></li>
                        <li><a href="#">New Beginnings In The Campus</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">Our Placement Program <i class="arrow down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="#">Particum</a></li>
                        <li><a href="#">Centre for Career Guidance</a></li>
                        <li><a href="#">Alumni Cell</a></li>
                        <li><a href="#">Placements & Internships</a></li>
                        <li><a href="#">Internship-Fair</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">ERP <i class="arrow down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="#">ERP Login</a></li>
                        <li><a href="#">Student Login</a></li>
                        <li><a href="#">Parent Login</a></li>
                        <li><a href="#">Faculty Login</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </header>