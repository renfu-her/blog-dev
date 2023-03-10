<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeeksforGeeks - Bootstrap 5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <!-- Mansory JS -->
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" async></script>
</head>

<body>
    <div class="container">
        <div class="mt-5 mb-4">
            <h1 class="text-success">
                GeeksforGeeks
            </h1>
            <strong>
                Bootstrap 5 Cards Mansory
            </strong>
        </div>


        <div class="row mb-5" data-masonry='{"percentPosition": true }'>
            @livewire('post-get')
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        GeeksforGeeks is a computer science portal
                        for geeks. It offers courses in various
                        computer science subjects like Data Structures
                        and Algorithms, Database Management Systems, etc.
                    </div>
                </div>


            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221204185234/download.png"
                        class="card-img-top" />
                    <div class="card-body">
                        This is a card with the image on the top
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p>Click the button below to explore the courses.</p>
                        <a href="https://practice.geeksforgeeks.org/courses" class="btn btn-success">
                            Explore
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    The more you know, the more you
                                    realize you know nothing.
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Socrates
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card border-success ">
                    <div class="card-body">
                        <p>GeeksforGeeks was founded by Sandeep
                            Jain in 2009 as he wanter to provide
                            computer science students a portal where
                            they can gain knowledge and prepare for big
                            tech interviews.
                        </p>
                        <a href="https://practice.geeksforgeeks.org/courses" class="btn btn-success">
                            Explore courses
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
