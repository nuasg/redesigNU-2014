<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Vote for the RedesigNU Students' Choice Awards winners!" />
    <meta property="og:image" content="https://asg.northwestern.edu/redesigNU/vote/prof.png" />
    <meta property="og:url" content="https://asg.northwestern.edu/redesigNU/vote/" />
    <meta property="og:description" content="Check out the finalists and submit your vote! $2000 Grand Prize, $1500 Second Place, $1000 Third Place"/>
    <title>Vote for the RedesigNU Students' Choice Awards winners!</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
    <style type="text/css">
        @font-face {
            font-family: 'Museo Slab';
            src: url('museo_slab.woff');
        }
        body {
            font-family: 'Museo Slab', Georgia, serif;
            background: #555;
        }
        .title .lead {
            margin-bottom: 10px;
        }
        .container {
            background: white;
        }
        h1,
        h2 {
            font-weight: normal;
        }
        a:active,
        a:hover {
            text-decoration: none;
        }
        .project-img,
        .banner {
            width: 100%;
        }
        .project-img {
            opacity: 0.87;
            transition: opacity 0.1s ease-in-out;
        }
        .project-img:hover {
            opacity: 1;
        }
        .title {
            margin-bottom: 20px;
        }
        .vote-button,
        .project-row .col-md-6 {
            margin-bottom: 50px;
        }
        .project-row p {
            font-size: 1.1em;
        }
        .vote-button {
            width: 70%;
            height: 120px;
            padding-top: 15px;
            font-size: 70px;
        }
        h2 {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <a href=""><img class="banner" src="banner.png" alt="" /></a>
        <div class="col-md-12 text-center title">
            <h1>Congratulations to the winners!</h1>
            <h2>Census</h2>
            <p class="lead">Grand Prize, $2000</p>
            <h2>One Day in Chicago</h2>
            <p class="lead">Second Place, $1500</p>
            <h2>Unofficial Northwestern App</h2>
            <p class="lead">Third Place, $1000</p>
            <p><a href="http://redesignu.challengepost.com/submissions" target="_blank">View all submitted hackathon projects (including non-finalists) on ChallengePost.</a></p>
        </div>
    </div>

<?php
$finalists = array(
    array(
        'link' => 'http://censusapp.meteor.com ',
        'source_link' => 'https://github.com/RedesigNU/Census',
        'img_src' => 'https://i.imgur.com/1zrohl0.png',
        'name' => 'Census',
        'desc' => "Use Census to tell your professor all he/she wants to know about how they're lecturing.",
    ),
    array(
        'link' => 'http://christopher-li.github.io/',
        'source_link' => 'https://github.com/RedesigNU/Chalkboard-Love',
        'img_src' => 'https://i.imgur.com/uy5FpKs.png',
        'name' => 'Chalkboard Love',
        'desc' => 'Chalkboard Love is a snazzy parallax scrolling web-based chalk wall where users and the creators can share what they love about Northwestern.',
    ),

    array(
        'link' => 'http://courseconnect.tk/',
        'source_link' => 'https://github.com/RedesigNU/Course-Connect',
        'img_src' => 'https://i.imgur.com/Wc3YtYw.jpg',
        'name' => 'Course Connect',
        'desc' => 'Using machine learning, we build you a profile based on your academic history and help you build a better curriculum every single quarter.',
    ),
    array(
        'link' => 'http://thomasythuang.github.io/redesignu/',
        'source_link' => 'https://github.com/RedesigNU/CourseDJ',
        'img_src' => 'https://i.imgur.com/101vQ1L.jpg',
        'name' => 'CourseDJ',
        'desc' => 'A handy website for generating great schedules based on what classes you want to take.',
    ),
    array(
        'link' => 'http://murphy.wot.eecs.northwestern.edu/~xto633/hackathon/',
        'source_link' => 'https://github.com/RedesigNU/Easy-Plan',
        'img_src' => 'https://i.imgur.com/7xB9AUs.jpg',
        'name' => 'Easy Plan',
        'desc' => 'A simple course search and arrangement system with calendar display.',
    ),

    array(
        'link' => 'http://northwesternapp.fulldice.com/',
        'source_link' => '',
        'img_src' => 'https://i.imgur.com/3aQ3bdG.jpg',
        'name' => 'Northwestern Mobile App',
        'desc' => 'NorthwesternApp combines the services and information most essential to NU students into a mobile app.',
    ),
    array(
        'link' => 'http://onedayinchicago.herokuapp.com/',
        'source_link' => 'https://github.com/RedesigNU/One-Day-in-Chicago',
        'img_src' => 'https://i.imgur.com/Yjszup5.jpg',
        'name' => 'One Day in Chicago',
        'desc' => 'Let us take the stress out of planning your perfect trip to Chicago!',
    ),
    array(
        'link' => 'http://purple-io.herokuapp.com/',
        'source_link' => 'https://github.com/RedesigNU/Purpl.io',
        'img_src' => 'https://i.imgur.com/hKng64Q.jpg',
        'name' => 'Purpl.io',
        'desc' => 'We connect instructors with valuable feedback from their students throughout the quarter and give students an engaging way to connect with each other. Log in with <strong>marvin@purpl.io</strong> and password <strong>123</strong>.',
    ),
);

$range = range(0, 7);
shuffle($range);

$num_rows = 4;
for ($i = 0; $i < $num_rows; $i++): ?>
    <div class="row project-row">
        <div class="col-md-6">
            <a href="<?php echo $finalists[$range[2*$i]]['link'] ?>" target="_blank"><img class="project-img" src="<?php echo $finalists[$range[2*$i]]['img_src'] ?>"></a>
            <h2><a href="<?php echo $finalists[$range[2*$i]]['link'] ?>" target="_blank"><?php echo $finalists[$range[2*$i]]['name'] ?></a></h2>
            <p><?php echo $finalists[$range[2*$i]]['desc'] ?> <?php if ($finalists[$range[2*$i]]['source_link']): ?><a href="<?php echo $finalists[$range[2*$i]]['source_link'] ?>" target="_blank">View source</a><?php endif ?></p>
        </div>
        <div class="col-md-6">
            <a href="<?php echo $finalists[$range[2*$i+1]]['link'] ?>" target="_blank"><img class="project-img" src="<?php echo $finalists[$range[2*$i+1]]['img_src'] ?>"></a>
            <h2><a href="<?php echo $finalists[$range[2*$i+1]]['link'] ?>" target="_blank"><?php echo $finalists[$range[2*$i+1]]['name'] ?></a></h2>
            <p><?php echo $finalists[$range[2*$i+1]]['desc'] ?> <?php if ($finalists[$range[2*$i+1]]['source_link']): ?><a href="<?php echo $finalists[$range[2*$i+1]]['source_link'] ?>" target="_blank">View source</a><?php endif ?></p>
        </div>
    </div>
<?php endfor ?>
    <div class="row">
        <div class="col-md-12 text-center">
            <a class="btn btn-info btn-lg vote-button" href="https://northwestern.collegiatelink.net/form/start/45322">VOTE</a>
        </div>
    </div>
</div>
</body>
</html>
