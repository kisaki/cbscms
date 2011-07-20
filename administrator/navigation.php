    	<ul class="nav">
        	<li>&raquo;</li>
            <li><a href="/administrator" id="site"><img src="icons/home.png"/>Site</a>
				<ul>
					<li><a href="/" target="_blank"><img src="icons/computer.png" />Preview</a></li>
				</ul>
            </li>
            <li><a href="#" id="articles"><img src="icons/paper.png"/>Articles</a>
				<ul>
					<li><a href="addArticle.php"><img src="icons/new.png"/>Write new</a></li>
					<li><a href="viewArticles.php"><img src="icons/database.png"/>View Articles</a></li>
				</ul>
            </li>
            <?php if($_SESSION['thegroup'] == 1){ ?>
            <li><a href="#" id="top-level"><img src="icons/user.png"/>Users</a>
				<ul>
					<li><a href="addUser.php"><img src="icons/user_add.png"/>Add User</a></li>
				</ul>
            </li>
            <?php } ?>
            <li><a href="#" id="top-level"><img src="icons/box.png"/>Modules</a></li>
            <li><a href="#" id="top-level"><img src="icons/lightbulb.png"/>More</a>
				<ul>
					<li><a href="help.php"><img src="icons/float.png" />Help</a></li>
					<li><a href="login-form.php?action=logout"><img src="icons/circle_red.png" />Logout</a></li>
				</ul>
            </li>
        </ul>
