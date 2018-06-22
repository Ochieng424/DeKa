<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 6/19/2018
 * Time: 9:53 AM
 */

?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/index.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
    <body>
      <header id="header" style="padding: 10px; background-color: #333333; color: white;">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-10">
                      <h1>Dashboard <small>Manage your work</small></h1>
                  </div>

                  <div class="col-md-2">
                      <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                              Add Product
                              <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                              <li><a type="button" data-toggle="modal" data-target="#addDress">Dress</a></li>
                              <li><a type="button" data-toggle="modal" data-target="#addSkirt">Skirt</a></li>
                              <li><a type="button" data-toggle="modal" data-target="#addTop">Top</a></li>
                              <li><a type="button" data-toggle="modal" data-target="#addShoes">Shoes</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </header>
        <section id="breadcrumb">
            <div class="container-fluid">
                <ol class="breadcrumb">
                 <li class="active">Dashboard</li>
                </ol>
            </div>
    </section>
    <section id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                  <div class="list-group">
                      <a href="#" class="list-group-item active">Dashboard</a>
                      <a href="#" class="list-group-item">Something</a>
                      <a href="#" class="list-group-item">Something</a>
                      <a href="#" class="list-group-item">Something</a>
                      <a href="#" class="list-group-item">Something</a>
                  </div>
                </div>

                <div class="col-md-9">
                   <div class="panel panel-default">
                       <div class="panel-heading">
                           <h3 class="panel-title">Overview</h3>
                       </div>
                       <div class="panel-body">
                           <div class="col-md-4">
                               <div class="well text-center">
                                   <h1>Users</h1>
                               </div>
                           </div>

                           <div class="col-md-4">
                               <div class="well text-center">
                                   <h1>Users</h1>
                               </div>
                           </div>

                           <div class="col-md-4 text-center">
                               <div class="well">
                                   <h1>Users</h1>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>

      <footer id="footer" style="background-color: #333; color: white; text-align: center; padding: 30px; margin-top: 30px;">
          <p>Copyright DeKa, &copy; 2017</p>
      </footer>

      <div class="modal fade" id="addDress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="upload.dress.php">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"><i class="fa fa-times"></i></button>
                    <h3 class="modal-title" id="myModalLabel">Dress</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="dressId" style="margin-bottom: 5px;">ID</label>
                        <input type="text" class="form-control" id="dressId">
                    </div>

                      <div class="form-group">
                          <label for="dressModel" style="margin-bottom: 5px;">Model</label>
                          <input type="text" class="form-control" id="dressModel">
                      </div>

                    <div class="form-group">
                        <label for="dressImage" style="margin-bottom: 5px;">Image</label>
                        <input type="file" class="form-control-file" id="dressImage">
                    </div>

                    <div class="form-group">
                        <label for="dressSize" style="margin-bottom: 5px;">Size</label>
                        <input type="text" class="form-control" id="dressSize">
                    </div>

                    <div class="form-group">
                        <label for="dressDescription" style="margin-bottom: 5px;">Description</label>
                        <textarea class="form-control rounded-0" id="dressDescription" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="dressPrice" style="margin-bottom: 5px;">Price</label>
                        <input type="number" class="form-control" id="dressPrice">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" name="addDress" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
      <div class="modal fade" id="addSkirt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <form>
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="close"><i class="fa fa-times"></i></button>
                          <h3 class="modal-title" id="myModalLabel">Skirt</h3>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                              <label for="skirtId" style="margin-bottom: 5px;">ID</label>
                              <input type="text" class="form-control" id="skirtId">
                          </div>

                          <div class="form-group">
                              <label for="skirtModel" style="margin-bottom: 5px;">Model</label>
                              <input type="text" class="form-control" id="skirtModel">
                          </div>

                          <div class="form-group">
                              <label for="skirtImage" style="margin-bottom: 5px;">Image</label>
                              <input type="file" class="form-control-file" id="skirtImage">
                          </div>

                          <div class="form-group">
                              <label for="skirtSize" style="margin-bottom: 5px;">Size</label>
                              <input type="text" class="form-control" id="skirtSize">
                          </div>

                          <div class="form-group">
                              <label for="skirtDescription" style="margin-bottom: 5px;">Description</label>
                              <textarea class="form-control rounded-0" id="skirtDescription" rows="3"></textarea>
                          </div>

                          <div class="form-group">
                              <label for="skirtPrice" style="margin-bottom: 5px;">Price</label>
                              <input type="number" class="form-control" id="skirtPrice">
                          </div>

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <div class="modal fade" id="addTop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <form>
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="close"><i class="fa fa-times"></i></button>
                          <h3 class="modal-title" id="myModalLabel">Top</h3>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                              <label for="topId" style="margin-bottom: 5px;">ID</label>
                              <input type="text" class="form-control" id="topIdId">
                          </div>

                          <div class="form-group">
                              <label for="topModel" style="margin-bottom: 5px;">Model</label>
                              <input type="text" class="form-control" id="topModel">
                          </div>

                          <div class="form-group">
                              <label for="topImage" style="margin-bottom: 5px;">Image</label>
                              <input type="file" class="form-control-file" id="topImage">
                          </div>

                          <div class="form-group">
                              <label for="topSize" style="margin-bottom: 5px;">Size</label>
                              <input type="text" class="form-control" id="topSize">
                          </div>

                          <div class="form-group">
                              <label for="topDescription" style="margin-bottom: 5px;">Description</label>
                              <textarea class="form-control rounded-0" id="topDescription" rows="3"></textarea>
                          </div>

                          <div class="form-group">
                              <label for="topPrice" style="margin-bottom: 5px;">Price</label>
                              <input type="number" class="form-control" id="topPrice">
                          </div>

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <div class="modal fade" id="addShoes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <form>
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="close"><i class="fa fa-times"></i></button>
                          <h3 class="modal-title" id="myModalLabel">Shoe</h3>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                              <label for="shoeId" style="margin-bottom: 5px;">ID</label>
                              <input type="text" class="form-control" id="shoeId">
                          </div>

                          <div class="form-group">
                              <label for="shoeModel" style="margin-bottom: 5px;">Model</label>
                              <input type="text" class="form-control" id="shoeModel">
                          </div>

                          <div class="form-group">
                              <label for="shoeImage" style="margin-bottom: 5px;">Image</label>
                              <input type="file" class="form-control-file" id="shoeImage">
                          </div>

                          <div class="form-group">
                              <label for="shoeSize" style="margin-bottom: 5px;">Size</label>
                              <input type="number" class="form-control" id="shoeSize">
                          </div>

                          <div class="form-group">
                              <label for="shoeDescription" style="margin-bottom: 5px;">Description</label>
                              <textarea class="form-control rounded-0" id="shoeDescription" rows="3"></textarea>
                          </div>

                          <div class="form-group">
                              <label for="shoePrice" style="margin-bottom: 5px;">Price</label>
                              <input type="number" class="form-control" id="shoePrice">
                          </div>

                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </body>
<script src="../../bootstrap/JQuery/jquery-3.3.1.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</html>
