<?php
session_start();
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Galaxy Cloud | Courses Details</title>
    <?php include "include/css-url.php"; ?>

    <!-- Dynamic Meta Content -->
    <meta name="description"
        content="Build Linux Career with Galaxy Cloud, our Linux training is based on live industry projects that helps participant to get jobs in top MNC">
    <meta name="title" content="Galaxy Cloud | Linux Training">
    <meta name="keywords"
        content="Linux Course in Delhi, Linux Training in Noida, Linux Training Institute, Best IT course training institute in Delhi, Linux Industrial Training in Delhi, Industrail training on linux in Delhi, Linux Best Training Institute in Delhi, Linux Online Training in Delhi NCR, Linux training institute in India">
    <meta name="url" content="https://galaxycloud.in/linux-training.php">

    <!-- Fixed Meta Content -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon.png">
    <!-- <meta name="google-play-app" content="app-id=com.ued"> -->
    <meta name="language" content="English">
    <meta name="robots" content="index, follow">

    <!-- Fixed Meta Content -->

    <meta property="og:site_name" content="Galaxy Cloud">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Galaxy Cloud | Linux Training">
    <meta property="og:url" content="https://galaxycloud.in/linux-training.php">
    <meta property="og:description"
        content="Build Linux Career with Galaxy Cloud, our Linux training is based on live industry projects that helps participant to get jobs in top MNC">
    <meta property="og:image" content="https://galaxycloud.in/img/favicon.png">
    <meta property="og:image:alt" content="Galaxy Cloud logo">
    <meta property="og:type" content="service">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="www.galaxycloud.in">
    <meta name="twitter:site" content="@galaxycloud">
    <meta name="twitter:title" content="Galaxy Cloud | Linux Training">
    <meta name="twitter:url" content="https://galaxycloud.in/linux-training.php">
    <meta name="twitter:description"
        content="Build Linux Career with Galaxy Cloud, our Linux training is based on live industry projects that helps participant to get jobs in top MNC">
    <meta name="twitter:image" content="https://galaxycloud.in/img/favicon.png">

    <meta itemprop="name" content="Galaxy Cloud">
    <meta itemprop="url" content="https://galaxycloud.in/linux-training.php">
    <meta itemprop="description"
        content="Build Linux Career with Galaxy Cloud, our Linux training is based on live industry projects that helps participant to get jobs in top MNC">
    <meta itemprop="image" content="https://galaxycloud.in/img/favicon.png">

    <link rel="canonical" href="https://galaxycloud.in/">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <!-- Dynamic Meta Content -->
</head>

<body>

    <?php include "include/header.php"; ?>

    <section class="small-banner"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column text-center">
                    <h2 class="sm-banner-title">Linux Training</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Linux Training</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <div class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <main>

                        <div class="cours-video mb-30">
                            <div class="video-popup2 video-popup">
                                <img src="images/courses/linux.jpg" alt="">
                                <!-- <div class="video-content" ng-if="tableObj.link">
                                    <div class="play-icon">
                                        <a href="{{tableObj.link}}" class="history" target="_blank"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <div class="tran_card">
                            <h3 class="course-detail-title mb-10">Linux Training</h3>
                            <div class="card-body">
                                <p class="para">We at Galaxy Cloud provide Linux training by our corporate trainer and
                                    focus to deliver in-depth coverage on Linux system fundamentals as well as advanced
                                    administration. We provide Linux training to individuals who are looking to expand
                                    IT skills, taking first steps towards a new career. 100% Job oriented course program
                                    after completion candidates are able to join a big MNC.</p>
                            </div>
                        </div>

                        <div class="curriculum-area mb-55" ng-controller="w" ng-init="getData('<?= $id ?>')">
                            <div class="curriculum-head d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Course Curriculum</h5>
                            </div>
                            <div class="curriculum-content">
                                <!-- <p class="para mb-45"></p> -->
                                <div class="curriculum-accord accordio-style-3">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse1"
                                                    aria-expanded="false" aria-controls="collapse1">
                                                    LINUX INITIALIZATION:
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse"
                                                aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>What is linux and why linux?, About software licencing, Linux
                                                        Architecture, Setup Lab environment, Linux installation, Linux
                                                        GUI & CLI, Linux networking and trublshooting, Linux Boot
                                                        Process, Password Recovery, Secure GRUB, Basic and advanced
                                                        command, vim editors, Introduction to Bash Shell and use</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                    aria-expanded="false" aria-controls="collapse2">
                                                    USER ADMINISTRATION:
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse"
                                                aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Adding User Account, Adding Group, Modifying / Deleting User
                                                        Accounts, Group Administration, Password Aging Policies,
                                                        Switching Accounts, Sudo access, Linux Permissions on file and
                                                        directory, Permission concept, SUID, SGID, Sticky Bit, Changing
                                                        file ownership, Changing file group ownership, Access Control
                                                        Lists (ACLs), Linux File system explain</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                    aria-expanded="false" aria-controls="collapse3">
                                                    PACKAGE MANAGEMENT:
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse"
                                                aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>RPM Package Manager, Installing and Removing , queries, verify,
                                                        rpm help, YUM explain , Local and Remote repository, mount ISO
                                                        media, yum command install, remove, list, info, package
                                                        dependency, Pacakge upgrade and downgrade, </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading4">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                    aria-expanded="false" aria-controls="collapse4">
                                                    SYSTEM SERVICES:
                                                </button>
                                            </h2>
                                            <div id="collapse4" class="accordion-collapse collapse"
                                                aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Network Time Protocol, Virtual Network Computing(VNC) server,
                                                        Services and Daemon, Windows to Linux remote access, Linux to
                                                        Linux remote access, Linux to windows remote access, SSH(Secure
                                                        Shell) server,allow deny system access for user, Passwordless
                                                        SSH connection, Key based authentication, transer file remotely,
                                                        rsync, SCP, winscp, Explain Cron Jobs, Schedule tasks using
                                                        Cron, DHCP Server implementation</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading5">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                    aria-expanded="false" aria-controls="collapse5">
                                                    DISK MANAGEMENT:
                                                </button>
                                            </h2>
                                            <div id="collapse5" class="accordion-collapse collapse"
                                                aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Partition concepts, Creating and managing partition, Filesystem
                                                        types, command knowledge(fdisk, mkfs, df, mount, e2fsck, stat,
                                                        lsblk), /etc/fstab file explain, Swap partition, Share Windows
                                                        drive in Linux, Logical Volume Manager(LVM), NFS server, Inode,
                                                        Softlink & Hardlink, RAID concept explain</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading6">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                    aria-expanded="false" aria-controls="collapse6">
                                                    LINUX FILE SERVER:
                                                </button>
                                            </h2>
                                            <div id="collapse6" class="accordion-collapse collapse"
                                                aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>File Server Concepts, Samba installation, Share Directory using
                                                        Samba, Directory user wise, Common direcotry share, Access samba
                                                        share from windows and Linux, Implement ACL permission in Samba,
                                                        Samba Security, Install Webmin and Usermin tool, Manage Samba
                                                        from web, Create Samba backup</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading7">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse7"
                                                    aria-expanded="false" aria-controls="collapse7">
                                                    WEBSERVER IMPLEMENTATION:
                                                </button>
                                            </h2>
                                            <div id="collapse7" class="accordion-collapse collapse"
                                                aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>DNS Concepts, Installation and configuration of DNS Service, Live
                                                        Understanding of Registrar and DNS Hosting Techniques, DNS
                                                        Caching server, DNS Troublshooting, DNS Security, Explain about
                                                        webserver and how it works, Live Webserver hosting technique,
                                                        Install Apache HTTP server, Apache configuration understanding,
                                                        Apache Name Base and IP base VirtualHosting, Apache Indexing,
                                                        understanding of htaccess file, SSL implementing, Apache
                                                        Security and tuning</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading8">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse8"
                                                    aria-expanded="false" aria-controls="collapse8">
                                                    LAMP & DATABASE ADMINISTRATION:
                                                </button>
                                            </h2>
                                            <div id="collapse8" class="accordion-collapse collapse"
                                                aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Database concepts, MariaDB installation, creating database,
                                                        important database queries, Backup & restore operations,
                                                        Phpmyadmin installation, How to use database using Phpmyadmin,
                                                        securing Phpmyadmin, database security, LAMP(Linux, Apache,
                                                        MariaDB, PHP) Installation, php.ini file understanding</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading9">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse9"
                                                    aria-expanded="false" aria-controls="collapse9">
                                                    PROXY SERVER IMPLEMENTATION:
                                                </button>
                                            </h2>
                                            <div id="collapse9" class="accordion-collapse collapse"
                                                aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Squid Proxy server implementation based on industrial pattern,
                                                        Install and configure proxy server, allow & deny webside netwok
                                                        wise, URL rediection, proxy authentication, internet monitoring,
                                                        implementation of Sarg tool, Use Linux as a router, Proxy as a
                                                        caching server for fast internet surfing</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading10">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse10"
                                                    aria-expanded="false" aria-controls="collapse10">
                                                    MAIL SERVER IMPLEMENTATION:
                                                </button>
                                            </h2>
                                            <div id="collapse10" class="accordion-collapse collapse"
                                                aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Mailing system Concept based on industrial implement,
                                                        implementing postfix MTA, Sending email on local mailbox and on
                                                        public domain, Understanding Emaiil Queue, Email Header, Email
                                                        Forwarding, Alias, Transport rule, Posfix SMART Host
                                                        authentication, Implementing of Antivius in Postfix, Email
                                                        server security understanding RBL/PBL, SPF, DKIM, DMARC</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading11">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse11"
                                                    aria-expanded="false" aria-controls="collapse11">
                                                    SHELL SCRIPT & BACKUP UTILITY:
                                                </button>
                                            </h2>
                                            <div id="collapse11" class="accordion-collapse collapse"
                                                aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Important command for shell script use (Awk, Sed, grep, wc, cut,
                                                        paste, uniq, sort, diff, head, tail, less more, nc etc.),
                                                        Input/Output redirectioin and regular expression, Shell script
                                                        loop if, if else, for, while and nesteding loop, Archive,
                                                        compress, unpack and uncompress files using tar, zip, gzip etc,
                                                        Data backup using tar, zip and cron implementation</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading12">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse12"
                                                    aria-expanded="false" aria-controls="collapse12">
                                                    LINUX FIREWALL & SECURITY:
                                                </button>
                                            </h2>
                                            <div id="collapse12" class="accordion-collapse collapse"
                                                aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Firewall Concepts, Implenting iptables firewall, Implementing
                                                        firewalld, how to use firewall command, Securing Server using
                                                        firewall, Securing port and services, Allowing denying network,
                                                        Pfsense firewall implentation, Pfsense fiewall use as a gateway
                                                        device in production environment</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading13">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse13"
                                                    aria-expanded="false" aria-controls="collapse13">
                                                    LINUX VIRTULIZATION:
                                                </button>
                                            </h2>
                                            <div id="collapse13" class="accordion-collapse collapse"
                                                aria-labelledby="heading13" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Datacenter Implementation and Virtulization Concept, Installing
                                                        and configuration of KVM virtulization, Create Virtual Maching,
                                                        Adding Disk in Virtual Mahine, Backup and restore, Implementing
                                                        of Vmware Vsphare</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading14">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse14"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    EXAM & INTERVIEW PREPRATION:
                                                </button>
                                            </h2>
                                            <div id="collapse14" class="accordion-collapse collapse"
                                                aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Course rivision, test after finishing course, Extra class for
                                                        Interview preapration, Resume Preapration, Help in Placement.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Section-4
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Design Principles - Some Important
                                                                Facts (part 01)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Example of Redesign an Old Site to
                                                                New (Part 01)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Example of Redesign an Old Site to
                                                                New (Part 02)</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <h3 class="course-detail-title mb-40">Requirements</h3>
                        <ul class="course-list">
                            <li><a href="#">Lorem Ipsum is simply dummy text of the printing</a></li>
                            <li><a href="#">Lorem has been the industry’s standard dummy text ever</a></li>
                            <li><a href="#">Take a look at our round up of the best shows</a></li>
                            <li><a href="#">Printer took a galley of type make a type specimen book</a></li>
                        </ul> -->

                    </main>
                </div>
                <div class="col-lg-4">
                    <aside>
                        <div class="about-course left-widget mb-30">
                            <a href="#" target="_blank" class="primary--btn w-100 mb-25"><i class="fa fa-download"
                                    aria-hidden="true"></i> Download PDF</a>
                            <table class="course-table">
                                <tr>
                                    <td><i class='bx bx-folder-open'></i>Lesson</td>
                                    <td>:&nbsp;&nbsp;15+</td>
                                </tr>
                                <tr>
                                    <td><i class="las la-globe"></i>Language</td>
                                    <td>:&nbsp;&nbsp;English/Hindi</td>
                                </tr>
                                <tr>
                                    <td><i class="las la-level-up-alt"></i>Level</td>
                                    <td>:&nbsp;&nbsp;Advanced</td>
                                </tr>
                                <tr>
                                    <td><i class="las la-calendar"></i>Duration</td>
                                    <td>:&nbsp;&nbsp;2 Month</td>
                                </tr>
                                <tr>
                                    <td><i class="las la-suitcase"></i>Job Placement</td>
                                    <td>:&nbsp;&nbsp;Yes</td>
                                </tr>

                            </table>
                        </div>
                        <div class="about-course left-widget mb-30">
                            <section class="review-section">
                                <div class="row review-active slick-initialized slick-slider slick-dotted">
                                <!-- <div class="slick-list draggable">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 4940px; transform: translate3d(-2660px, 0px, 0px);">
                                        <div class="slick-slide" data-slick-index="3" aria-hidden="true"
                                            role="tabpanel" id="slick-slide33" style="width: 350px;"
                                            aria-describedby="slick-slide-control33" tabindex="-1">
                                            <div> -->


                                                <div class="col-12 mb-40 pt-5"
                                                    style="width: 100%; display: inline-block;">
                                                    <div class="review-item">
                                                        <div class="qutoe-icon">
                                                            <svg width="100" height="100" viewBox="0 0 100 100"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g opacity="1">
                                                                    <path
                                                                        d="M50 87.5C70.6781 87.5 87.5 70.6766 87.5 50C87.5 29.3234 70.6781 12.5 50 12.5C29.3234 12.5 12.5 29.3234 12.5 50C12.5 70.6766 29.3234 87.5 50 87.5ZM50 18.75C67.2313 18.75 81.25 32.7687 81.25 50C81.25 67.2313 67.2313 81.25 50 81.25C32.7687 81.25 18.75 67.2313 18.75 50C18.75 32.7687 32.7687 18.75 50 18.75Z">
                                                                    </path>
                                                                    <path
                                                                        d="M56.25 64.0625H68.75C70.475 64.0625 71.875 62.6625 71.875 60.9375V48.4375C71.875 46.7125 70.475 45.3125 68.75 45.3125H60.1219C60.7828 43.9891 61.85 42.8813 63.2375 42.1875L63.8984 41.8562C65.4422 41.0844 66.0672 39.2078 65.2953 37.6625C64.7469 36.5688 63.6438 35.9375 62.4984 35.9375C62.0281 35.9375 61.5516 36.0422 61.1016 36.2688L60.4422 36.5984C55.9281 38.8547 53.125 43.3922 53.125 48.4375V60.9375C53.125 62.6625 54.525 64.0625 56.25 64.0625ZM65.625 57.8125H59.375V51.5625H65.625V57.8125Z">
                                                                    </path>
                                                                    <path
                                                                        d="M31.25 64.0625H43.75C45.475 64.0625 46.875 62.6625 46.875 60.9375V48.4375C46.875 46.7125 45.475 45.3125 43.75 45.3125H35.1219C35.7828 43.9891 36.85 42.8812 38.2359 42.1891L38.8984 41.8578C40.4422 41.0859 41.0688 39.2094 40.2969 37.6641C39.7469 36.5687 38.6438 35.9375 37.4969 35.9375C37.0281 35.9375 36.5516 36.0422 36.1016 36.2672L35.4391 36.5984C30.9281 38.8547 28.125 43.3922 28.125 48.4375L28.125 60.9375C28.125 62.6625 29.525 64.0625 31.25 64.0625ZM40.625 57.8125H34.375V51.5625H40.625V57.8125Z">
                                                                    </path>
                                                                </g>
                                                            </svg> 
                                                        </div>
                                                        <p>Amet minim mollit non deserunt ullamco est sit aliqua
                                                            dolor do amet sint. Velit officia consequat duis</p>
                                                        <div class="reviewer">
                                                            <!--<div class="reviewer-thumb">
                                                                <img src="assets/images/review/r5.jpg" alt="">
                                                            </div>-->
                                                            <div class="reviewer-text">
                                                                <h6 class="reviewer-name">Disuza</h6>
                                                                <p class="mb-0">UX Researcher</p>
                                                                <span>
                                                                <i class="las la-star"></i>
                                                                <i class="las la-star"></i>
                                                                <i class="las la-star"></i>
                                                                <i class="lar la-star"></i>
                                                                <i class="lar la-star"></i>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <!-- </div>
                                        </div> -->
                                    <!-- </div> -->
                                </div>
                            </section>
                        </div>
                        
                    </aside>
                </div>
            </div>


        </div>
    </div>


    <?php include "include/footer.php"; ?>

    <?php include "include/js-url.php"; ?>
</body>

</html>