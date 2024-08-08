<body>

<div class="wrapper">

    <div class="banner common">

    <div class="logo">
        <a href="index.php">
            <img src="images/holidays_logo.png" alt="Holidays logo">
        </a>
    </div>  <!-- / logo -->

        <h1>Unofficial Holidays</h1>
    </div>  <!-- / banner -->

    <div class="nav common">

    <h2>Search</h2>

<!-- Show All Button -->
<a class="search-button" href="show_all.php" style="text-decoration:none;">
<div class="button-link full-button">
    <span class="button-text">Show all</span>
    <span class="button-emoji"><i class="fas fa-search fa-lg"></i></span>
</div>
</a>

<!-- Random Button -->
<a class="search-button" href="random.php" style="text-decoration:none;">
<div class="button-link full button">
    <span class="button-text">Random</span>
    <span class="button-emoji"><i class="fas fa-random fa-lg"></i></span>
</div>
</a>

<hr>
		
<!-- Keyword Area -->

<form method="post" action="keyword.php" enctype="multi/form-data">
	<div class="search-container">

	<input class="search" type="text" name="keyword_search" required valuez="" placeholder="keyword">
		
	<button class="button-link" type="submit" name="keyword">
		<span class="small-mag"><i class="fas fa-search fa-lg"></i><span>
	</button>
	</div>  <!-- / search container -->
</form>


<!-- Topic Search -->
<form class="search-form" method="post" action="topic.php" enctype="multipart/form-data">

    <div class="search-container">

        <!-- Topic Drop down goes here... -->
        <select class="search" required>
            <option value="" disabled>Choose../</option>
            <option value="activity">Activity</option>
            <option value="career">Career</option>
            <option value="cause">Cause</option>
        </select>

        <button class="button-link" type="submit" name="keyword">
            <span class="small-mag"><i class="fas fa-search fa-lg"></i></span>
        </button>

    </div>  <!-- / seach div for topic box -->

</form>

<hr />

<!-- Date Area -->
<!-- Today Button -->
<a class="search-button" href="today.php">
<div class="button-link full-button">
    <span class="button-text">Today</span>
    <span class="button-emoji"><i class="fas fa-calendar-week fa-lg"></i></span>
</div>
</a>
    
<!-- Date form -->
<form class="search-form" method="post" action="topic.php" enctype="multipart/form-data">

    <div class="search-container">

        <input class="search" type="date" name="date-search" required value=""/>

        <button class="button-link" type="submit" name="date-search">
            <span class="small-mag"><i class="fas fa-search fa-lg"></i></span>
        </button>

    </div>  <!-- search container for date form -->

</form>

</div>  <!-- / nav -->