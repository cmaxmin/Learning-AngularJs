<!DOCTYPE html>
<html lang="en" ng-app>
  <head>
    <meta charset="utf-8">
    <!-- link css bootstrapt -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Learning - AngularJS</title>
  <head>
  <body ng-init="price=100;qty=50;">
    <div class="container">
      <?php include('navbar.php'); ?>
    </div>
    <div class="container">
      <header>
        <div class="jumbotron">
          <h2>AngularJs แบบที่ 1</h2>
          <p>เริ่มต้นใช้งาน AngularJS ตอนที่ 01
          <p class="font-italic text-lowercase"><small><a href="https://www.youtube.com/watch?v=Qg4YKBkJxHk" target="_blank">เริ่มต้นใช้งาน AngularJS ตอนที่ 01</a></small></p>
          <hr/>
          <p>ทำความเข้าใจ Code เบื้องต้นของ AngularJS ทำความเข้าใจ <strong class="font-italic">ng-app, ng-init, ng-model</strong></p>
        </div>
      </header>
      <hr/>
        <p><strong class="font-italic">ng-app</strong> = มันคือ Attributes ใน HTML หรือถ้าจะให้เรียกอีกอย่าง ใน AngularJS จะเรียกสิ่งเหล่านี้ว่า Directives ซึ่งส่วนมาก Directives ใน AngularJS จะขึ้นต้นด้วย</p>
        <p>ในการใช้คำสั่งที่ใช้เกี่ยวกับ FromeWork AngularJS ประกาศใน</p>

      <hr/>
      <p>Challenge 1 Test <strong>ng-app</strong> and <strong>ng-model</strong></p>
      <input type="text" name="" value="" ng-model="text" class="from-control" placeholder="You name">
      <p>Hello word,{{text}}</p>
      <input type="text" name="" value="" ng-model="text" class="from-control" placeholder="You name">
      <hr/>
      <p>Challenge 2 Test <strong>ng-init</strong></p>
      <input type="text" name="" value="" ng-model="price" class="from-control" placeholder="Price">
      <input type="text" name="" value="" ng-model="qty" class="from-control" placeholder="qty">
      <p>Total price,{{ price * qty }}</p>
      <hr/>
      <p>Challenge 2 Test <strong>ng-init="name1=['name01','name02'...]"</strong> format in array type 1</p>
      <div class="container" ng-init="name1=['name01','name02','name03']">
        <ul class="list-groups" ng-repeat="n1 in name1">
          <li class="list-groups-item">{{ n1 }}</li>
        </ul>
      </div>
      <hr/>

      <p>Challenge 3 Test <strong>ng-init="name2=[{'name':'Narongrit','country':'Thailand','Salary':30000}]"</strong> format in array type 2</p>
      <div ng-init="name2=[
      {'name':'Narongrit','country':'Thailand','Salary':30000},
      {'name':'Patchairit','country':'Lao','Salary':60000},
      {'name':'Amornrat','country':'Cannada','Salary':20000}
      ]">
      <input type="text" name="" value="" class="form-control" ng-model="queryString" placeholder="Filter By">
      <!-- <input type="text" name="" value="" class="form-control" ng-model="queryString.name" placeholder="Filter By"> -->
      <p>Filtered By: {{ queryString }}</p>
      <input type="radio" value="name" ng-model="sortString"> Sorted by Name
      <input type="radio" value="-name" ng-model="sortString"> Sorted by Name ( Descendding )
      <input type="radio" value="country" ng-model="sortString"> Sorted by country

      <p>Sort By: {{ sortString }}</p>
        <table class="table">
          <tr ng-repeat="n2 in name2 | filter:queryString | orderBy:sortString">
            <td>{{ n2.name }}</td>
            <td>{{ n2.country }}</td>
            <td>{{ n2.Salary | currency:'THB' }}</td>
          </tr>
        </table>
      </div>




    </div>
    <!-- Script AngularJS -->
    <script type="text/javascript" src="js/angular.min.js"></script>
    <!-- Script bootstrapJS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
