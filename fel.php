<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felaria Tamedia</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
         /* Style CSS here */
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, nav, main, footer {
            display: block;
            padding: 20px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
     }
     .gallery img {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 20px;
     }
    </style>
</head>
<body>
    <header>
        <h1>Felaria Jetty Tamedia</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <div class="centered-text">
            <h2>Home<br>ㅤ</h2>
            </div>
            <div class="centered-text">
            <p>Welcome to my website. This is the home page.</p>
            </div>
        </section>
        <section id="gallery">
            <div class="centered-text">
            <h2>Gallery<br>ㅤ</h2>
            </div>
            <div class="gallery">
                <img src="1.jpeg" alt="Image 1">
                <img src="2.jpeg" alt="Image 2">
                <img src="3.jpeg" alt="Image 3">
                <img src="4.jpeg" alt="Image 4">
                <img src="5.jpeg" alt="Image 5">
                <img src="6.jpeg" alt="Image 6">
                <img src="7.jpeg" alt="Image 7">
                <img src="8.jpeg" alt="Image 8">
                <img src="9.jpeg" alt="Image 9">
                <img src="10.jpeg" alt="Image 10">
                <img src="11.jpeg" alt="Image 11">
                <img src="12.jpeg" alt="Image 12">
            </div>
        </section>
        <section id="blog">
            <div class="centered-text">
                <h2>Blog<br>ㅤ</h2>
            </div>
            <?php
            $sql = "SELECT JUDUL, LINK FROM tabelblog";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<h3>" . $row["JUDUL"] . "</h3>";
                    echo "<p><a href='" . $row["LINK"] . "'>" . $row["JUDUL"] . "</a></p>";
                    echo "</article>";
                }
            } else {
                echo "<p>No blog posts found.</p>";
            }
            ?>
            <article>
                <h3>First Article</h3>
                <div class="centered-text">
                <p>https://www.pn-pariaman.go.id/berita/artikel/652-manfaat-berolahraga-bagi-kesehatan-tubuh.html</p>
                  </div>
            </article>
            <article>
                <h3>Second Article</h3>
                <div class="centered-text">
                <p>https://www.kompasiana.com/shadam34363/6102d32a6e383365be68f042/artikel-perkembangan-teknologi-informasi-di-indonesia</p>
                  </div>
            </article>
            <article>
                <h3>Third Article</h3>
                <div class="centered-text">
                <p>https://markey.id/blog/technology/technology-plan/teknologi-komputer</p>
                  </div>
            </article>
        </section>
        <section id="contact">
            <div class="centered-text">
            <h2>Contact<br>ㅤ</h2>
            </div>
            <div style="display: flex; align-items: center;">
            </div>
            <div class="centered-text">
                <img src="gmail.jpg" alt="gambar" width="2%" height="3%" class="gmail.jpg">
                </div>
                <div class="centered-text">
                <p>felariatamedia12@gmail.com</p>
            </div>
            <div style="display: flex; align-items: center;">
            </div>
            <div class="centered-text">
                <img src="instagram.jpeg" alt="gambar2" width="2%" height="3%">
            </div>
            <div class="centered-text">
                <p>@felariaa_</p>
            </div>
            </body>
            </html>
        </section>
    </main>
    <script src="script.js"></script>
    <button onclick="toggleDarkMode()">dark mode</button>
</body>
</html>
