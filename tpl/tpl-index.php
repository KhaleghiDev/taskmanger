
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Task manager UI</title>
  <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>
    <div class="userPanel"><i class="fa fa-chevron-down">

    </i><span class="username">abolfazl khaleghi </span>
      <img src="./assets/img/avatar.png" width="40" height="40"/>
    </div>
  </div>
  <div class="main">
    <div class="nav">
      <div class="searchbox">
        <div><i class="fa fa-search"></i>
          <input type="search" placeholder="Search"/>
        </div>
      </div>
      <div class="menu">
        <div class="title">Folders</div>
        <ul>
          <?php foreach($folders as $folder):?>
          <li> 
          <a class="list" href="?folder=<?=$folder->id?>">
          <i class="fa fa-folder"></i><?=$folder->title?>
          </a>
          <a class="delete" href="?deletefolder=<?=$folder->id?>">
          <i class="fa fa-trash-o"></i>
          </a>
          
          </li>
         <?php endforeach;?>
          <li class="active"> <i class="fa fa-folder-open"></i>Manage Tasks</li>
          
        </ul>
     
            <input class="w-70" id="inputFolderInput" name="title"  type="text"  placeholder="add folder ...">
            <button class="btn" id="addFolderBtn" type="submit">+</button>
     
      </div>
    </div>
    <div class="view">
      <div class="viewHeader">
        <div class="title">Manage Tasks</div>
        <div class="functions">
          <div class="button active">Add New Task</div>
          <div class="button">Completed</div>
          <div class="button inverz"><i class="fa fa-trash-o"></i></div>
        </div>
      </div>
      <div class="content">
        <div class="list">
          <div class="title">Today</div>
          <ul>
            <li class="checked"><i class="fa fa-check-square-o"></i><span>Update team page</span>
              <div class="info">
                <div class="button green">In progress</div><span>Complete by 25/04/2014</span>
              </div>
            </li>
            <li><i class="fa fa-square-o"></i><span>Design a new logo</span>
              <div class="info">
                <div class="button">Pending</div><span>Complete by 10/04/2014</span>
              </div>
            </li>
            <li><i class="fa fa-square-o"></i><span>Find a front end developer</span>
              <div class="info"></div>
            </li>
          </ul>
        </div>
        <div class="list">
          <div class="title">Tomorrow</div>
          <ul>
            <li><i class="fa fa-square-o"></i><span>Find front end developer</span>
              <div class="info"></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
<script src="./assets/js/jquery.min.js"></script>
  <script  src="./assets/js/script.js"></script>
  
</body>
</html>
