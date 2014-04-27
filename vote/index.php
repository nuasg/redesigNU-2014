<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        .container {
            background: white;
        }
        h1 {
            font-weight: normal;
        }
        .project-img,
        .banner {
            width: 100%;
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
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <img class="banner" src="banner.png" alt="" />
        <div class="col-md-12 text-center title">
            <h1>Check out the finalists and submit your vote!</h1>
        </div>
    </div>

<?php
$finalists = array(
    array(
        'link' => '#',
        'img_src' => 'https://i.imgur.com/1zrohl0.png',
        'name' => 'Census',
        'desc' => "Tired of having no communication with your professor when you're sitting in a huge lecture? Afraid to raise your hand? Don't care enough to? Use Census to tell your professor all he/she wants to know about how they're lecturing.",
    ),
    array(
        'link' => 'http://christopher-li.github.io/',
        'img_src' => 'https://i.imgur.com/uy5FpKs.png',
        'name' => 'Chalkboard Love',
        'desc' => 'Chalkboard Love is a snazzy parallax scrolling web-based chalk wall where users and the creators can share what they love about Northwestern.',
    ),
    array(
        'link' => '#',
        'img_src' => 'https://i.imgur.com/Wc3YtYw.jpg',
        'name' => 'Course Connect',
        'desc' => 'We build you a profile based on your academic history and help you build a better curriculum every single quarter.',
    ),
    array(
        'link' => 'http://thomasythuang.github.io/redesignu/',
        'img_src' => 'https://i.imgur.com/101vQ1L.jpg',
        'name' => 'CourseDJ',
        'desc' => 'A handy website for generating great schedules based on what you classes you want to take.',
    ),
    array(
        'link' => 'http://murphy.wot.eecs.northwestern.edu/~xto633/hackathon/',
        'img_src' => 'https://i.imgur.com/7xB9AUs.jpg',
        'name' => 'Easy Plan',
        'desc' => 'A simple course search and arrangement system with calendar display.',
    ),
    array(
        'link' => 'http://northwesternapp.fulldice.com/',
        'img_src' => 'https://i.imgur.com/3aQ3bdG.jpg',
        'name' => 'Northwestern Mobile App',
        'desc' => 'NorthwesternApp combines the services and information most essential to NU students into a mobile app.',
    ),
    array(
        'link' => 'http://onedayinchicago.herokuapp.com/',
        'img_src' => 'https://i.imgur.com/Yjszup5.jpg',
        'name' => 'One Day in Chicago',
        'desc' => 'Let us take the stress out of planning your perfect trip to Chicago!',
    ),
    array(
        'link' => 'http://purple-io.herokuapp.com/',
        'img_src' => 'https://i.imgur.com/hKng64Q.jpg',
        'name' => 'Purpl.io',
        'desc' => 'We connect instructors with valuable feedback and insights from their students throughout the quarter as well as provide students an engaging way of connecting with one another outside the classroom.',
    ),
);

$range = range(0, 7);
shuffle($range);

$num_rows = 4;
for ($i = 0; $i < $num_rows; $i++): ?>
    <div class="row project-row">
        <div class="col-md-6">
            <a href="<?php echo $finalists[$range[2*$i]]['link'] ?>" target="_blank"><img class="project-img" src="<?php echo $finalists[$range[2*$i]]['img_src'] ?>"></a>
            <h2><?php echo $finalists[$range[2*$i]]['name'] ?></h2>
            <p><?php echo $finalists[$range[2*$i]]['desc'] ?></p>
        </div>
        <div class="col-md-6">
            <a href="<?php echo $finalists[$range[2*$i+1]]['link'] ?>" target="_blank"><img class="project-img" src="<?php echo $finalists[$range[2*$i+1]]['img_src'] ?>"></a>
            <h2><?php echo $finalists[$range[2*$i+1]]['name'] ?></h2>
            <p><?php echo $finalists[$range[2*$i+1]]['desc'] ?></p>
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
