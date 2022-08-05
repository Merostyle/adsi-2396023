<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Template"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Menu (PHP) </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="">Hello World </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>Hello World</h1>"; ?>
                <hr>
                <?php
                    print('<p class="text-start text-muted lh-lg">
                    lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed vitae fugit recusandae obcaecati beatae odio explicabo, ipsum reiciendis quos. Laudantium, vero. Assumenda odio aliquam aliquid eum ratione numquam vero sunt molestiae facere eaque consequatur voluptatem voluptas nemo in quas magnam dolorum, laborum quidem? Eius exercitationem incidunt voluptatibus itaque? Laboriosam nemo, inventore quasi doloremque repellendus aliquam ut harum, adipisci labore aut aspernatur vitae consequatur sed at deserunt dolore. Dolorum rerum velit est laboriosam debitis necessitatibus explicabo architecto quibusdam, ad ex tempore aliquam quo consequatur obcaecati voluptas, molestiae quia similique itaque culpa eaque voluptates voluptate dolor quam facilis. Blanditiis molestias itaque odit.
                    </p>') 
                ?>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>