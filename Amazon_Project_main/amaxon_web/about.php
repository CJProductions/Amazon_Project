
<!DOCTYPE html> <!-- States this part of the document as an HTML file. -->

<html lang="">

    <head>
        <title>About</title>
        <link rel="stylesheet" href="assets/styles.css"> <!-- refer to the style sheet in assets -->
    </head>

    <body>

    <?php // open php
    $_SESSION['Title'] = "About us"; // send the title
    require_once "assets/navi.php"; // display navi with the title variable used
    require_once("assets/ai.php");
    ?> <!-- close php -->

    <div class="basics"> <!-- refer to basics style from the css style sheet -->
        <div class="label_div">
            <!-- text bulk -->
            <h2>For Students</h2>

            <h1>Discover your Future with T-Level.</h1>
            <p>T-Levels are two-year technical qualifications that help you develop the knowledge and practical skills you need to build a career in the digital industry. <br>
                You will blend classroom learning with industry experience, with the chance to explore areas such as software development, cybersecurity, networking, data and digital production.
                Supported by companies like Amazon, you can learn more about how digital skills are used in real workplaces and start gaining experience for your future career.
            </p>

            <h1>Build Career Skills</h1>
            <p>A Digital T-Level can help you develop more than just technical knowledge.
                You’ll have opportunities to improve your teamwork, communication, problem-solving and professional skills while working on realistic projects.
                Whether you’re interested in working in technology, continuing into higher education or exploring an apprenticeship, a T-Level can help you take the next step towards your career.</p>
            <br>
        </div>

        <div class="label_div">
            <h2>For Career Advisors</h2>

            <h1>Supporting Students into Digital Careers</h1>
            <p>T-Levels provide students with a technical education that combines classroom-based learning with meaningful industry experience.
                For students interested in digital careers, Digital T-Levels can provide insight into areas such as software development, digital production, network infrastructure and cybersecurity.
                Partnerships with employers such as Amazon can help students understand the skills and behaviors expected within the technology sector.</p>

            <h1>Resources for Career Guidance</h1>
            <p>Career advisers can use T-Levels to help students explore alternative pathways into digital careers alongside A-Levels,
                apprenticeships and other technical qualifications. <br> Industry engagement can give students a clearer understanding of potential roles, workplace expectations and progression opportunities.
                By introducing students to T Levels and employer opportunities early, advisers can help them make informed decisions about their education and future career path.</p>
        </div>
    </div>

    </body>
</html>