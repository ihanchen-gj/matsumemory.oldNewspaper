<!DOCTYPE html>
<html lang="zh-Hant-TW">

<?
$title = "舊報紙";
$css = "/css/search.css";
include_once("frame.php");
?>

<body>
  <div id="lsdv">
    <div class="container">
      <div class="row header">

        <div class="col-xs-3 logo"><img src="./images/logo.svg" alt="舊報紙查詢系統" class="img-responsive" /></div>

        <div class="col-xs-6 col-xs-push-3">

          <!-- 搜尋未確定  -->
          <!-- <div class="col-xs-5 col-xs-push-5 search">
            <input type="text" class="form-control search-form" placeholder="搜尋">
          </div> -->

          <div class="col-xs-5 col-xs-push-5 search">
            <div class=" form-fieldset">
              <select id="delcityid" name="delcityid" class="form-control">
                <option value="" style="display: none">年月</option>
                <option value="2022">
                  2022
                </option>
                <option value="2023">
                  2023
                </option>
              </select>
            </div>
          </div>
          <div class="col-xs-2 col-xs-push-5 search">
            <button type="button" class="btn bn-keep" onClick="location.href='/search.php'">
              <img src="./images/icons-search.svg" alt="舊報紙查詢系統" class="img-responsive" />搜尋
            </button>
          </div>

        </div>
      </div>
    </div>
    <div class="container-fluid list">
      <div class="container">

        <div class="tabs">
          <div class="tab on">馬祖日報</div>
          <div class="tab">東湧日報</div>
        </div>

        <div class="">共 99 筆資料</div>

        <?php include("./_list.php"); ?>
      </div>
    </div>

    <?php include("./_modal.php"); ?>
  </div>
</body>

</html>