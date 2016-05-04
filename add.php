
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog list</title>
    <link type="text/css" rel="stylesheet" href="index.css"/>
</head>

<body>

<header id="top">
    <h1>myBlog</h1>
    <p>because the internet needs to be known what i think</p>

</header>

<nav class="nav1">
    <ul>
        <li><a href="blog.html">All Blog Items</a></li>
        <li><a href="blog.html">Work Items</a></li>
        <li><a href="blog.html">University Items</a></li>
        <li><a href="blog.html">Family Items</a></li>
        <li><a href="add.html">Insert Blog Items</a></li>
    </ul>
</nav>


<form action="<?php $_SERVER['PHP_SELF']?>" method="post">

            <label>Bug Name: &nbsp; &nbsp;&nbsp;&nbsp;
                <input type="text" name="Bugname" required><br/>
            </label>


            <label>Bug Summary &nbsp;
                <textarea name="summary" cols="14" rows="3" required></textarea><br/>
            </label>
            <label>Bug Category &nbsp;&nbsp;&nbsp;&nbsp;
                <select name="bugcat">
                    <option disabled>Select a Bug</option>
                    <option name="AndroidBug">AndroidBug</option>
                    <option name="iOSBug">iOSBug</option>
                    <option name="WindowsBug">WindowsBug</option>
                </select><br/>
            </label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">


        </form>
    </article>
    <!-- End of Article -->
</main>
<!-- End of Main -->
<!-- Begining of Footer -->
<footer>
    <div class="clearer"></div>
    <p> Designed By Armayau Ibrahim,2016</p>
</footer>
<!-- End of Footer -->
</body>
</html>
<?php if($_SERVER['PHP_SELF']=='GET'){
    header ("location:addbug.php");
}
elseif($_SERVER['PHP_SELF']=='POST'){
    $bname=$_POST['Bugname'];
    $summy = $_POST['summary'];
    $bcat = $_POST['bugcat'];
    $sql="INSERT INTO bugs (bugName,bugCategory,bugSummary) VALUES ('$bname','$bcat','$summy')";
    $res=mysqli_query($sercon,$sql);
}//else{header("location:index.php");}
?>