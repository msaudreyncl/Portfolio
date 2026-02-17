<?php
// 1. DATA CONFIGURATION - Update these arrays to update your site!
$name = "Audrey Nicole Mesa";
$tagline = "Computer Engineering Technology @ PUP";
$email = "auni.mesa@gmail.com";

$projects = [
    [
        "title" => "EcoBench",
        "tag" => "IoT & Sustainability",
        "desc" => "Solar-powered smart campus bench with manual power generation and IoT energy monitoring.",
        "stack" => ["Arduino", "IoT", "Solar Tech"],
        "link" => "#"
    ],
    [
        "title" => "A2S: Audio-to-Sheet",
        "tag" => "AI & Web",
        "desc" => "AI-powered transcription system for piano recordings using TensorFlow and Flask.",
        "stack" => ["Python", "TensorFlow", "Flask"],
        "link" => "#"
    ],
    [
        "title" => "RobLocks",
        "tag" => "Hardware",
        "desc" => "Automated access-controlled locker system utilizing I²C master-slave architecture.",
        "stack" => ["RFID", "GSM", "I²C"],
        "link" => "#"
    ]
];

$skills = [
    "Hardware & Mechatronics" => [
        "icon" => "ph-cpu",
        "items" => ["TESDA NC II Mechatronics Servicing", "Arduino & Circuit Design", "I²C & GSM Protocols"]
    ],
    "Systems & DevOps" => [
        "icon" => "ph-cloud-docker",
        "items" => ["Docker & Docker Compose", "Nginx, SSL, Reverse Proxy", "Linux Admin (MySQL, PHP-FPM)"]
    ],
    "Software & AI" => [
        "icon" => "ph-code",
        "items" => ["Full Stack (PHP, Python, Java)", "ML (TensorFlow, LibROSA)", "Git & Version Control"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>

    <nav>
        <div class="logo"><?php echo substr($name, 0, 1) . substr(explode(' ', $name)[1], 0, 1); ?><span>.</span></div>
        <div class="nav-links">
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#skills">Skills</a>
            <a href="mailto:<?php echo $email; ?>" class="btn-sm">Contact</a>
        </div>
    </nav>

    <header>
        <div class="container">
            <p class="subtitle"><?php echo $tagline; ?></p>
            <h1>Audrey Nicole <span class="highlight">Mesa</span></h1>
            <p class="hero-text">Bridging the gap between <strong>Hardware, AI, and DevOps</strong>. Building sustainable IoT solutions and intelligent systems.</p>
            <div class="cta-group">
                <a href="#projects" class="btn-primary">View My Work</a>
                <a href="https://github.com" class="btn-secondary"><i class="ph ph-github-logo"></i> GitHub</a>
            </div>
        </div>
    </header>

    <section id="projects" class="container">
        <h2 class="section-title">Featured Projects</h2>
        <div class="project-grid">
            <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <div class="project-tag"><?php echo $project['tag']; ?></div>
                <h3><?php echo $project['title']; ?></h3>
                <p><?php echo $project['desc']; ?></p>
                <div class="tech-stack">
                    <?php foreach ($project['stack'] as $tech): ?>
                        <span><?php echo $tech; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="skills" class="bg-alt">
        <div class="container">
            <h2 class="section-title">Technical Expertise</h2>
            <div class="skills-wrapper">
                <?php foreach ($skills as $category => $data): ?>
                <div class="skill-category">
                    <h4><i class="ph <?php echo $data['icon']; ?>"></i> <?php echo $category; ?></h4>
                    <ul>
                        <?php foreach ($data['items'] as $item): ?>
                            <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. Based in Manila, PH.</p>
    </footer>

</body>
</html>
