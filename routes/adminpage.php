<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projekt-2/css/global.css">
    <link rel="stylesheet" href="/projekt-2/css/adminpage.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Admin page</title>
</head>
<body>
    <div class="page-container">
    <?php include "./navbar.php";?>
        <div class="main-content-container">
            <div class="post-news-container">
                <form action="">
                    <h2>Post news</h2>
                    <textarea name="newsContent"></textarea>
                    <button type="submit">Post</button>
                </form>
            </div>
            <div class="handle-admin-container">
                <form action="">
                    <h2>Handle permissions</h2>
                    <input type="text" name="username" placeholder="Enter username">
                    <input type="text" name ="username" placeholder ="Set permission">
                    <h5>(1 for admin, 0 for regular user)</h5>
                    <button type="submit">Set permissions</button>
                </form>

            </div>

            
        </div>
    </div>
</body>
</html>