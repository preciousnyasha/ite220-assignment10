<?php include 'header.php';
      include 'db.php';
      include 'addSuppliers.php';
?>
<div class="container">
  <div class="jumbotron">
      <h1>Create Purchase Orders</h1>
    <form name="form" onsubmit="return validateForm()" action="create_expense.php" method="post">
       <h6 class="p-3 mb-4 mt-4 bg-primary text-white">1. General Information</h6>
         <div class="form-group">
          <label><b>Choose a supplier</b></label>
          <select name="supplier" id="supplier_id" class="form-control">
            <?php list_suppliers(); ?>
          </select>
        </div>
      <div class="form-group">
          <label for=""><b>Shipping Address</b></label>
          <textarea name="shipping" id="id_shipping_address" class="form-control" rows="3"></textarea><span class="hint" id="shipping_feedback"></span>
          <br>
          <button id="creater_suppliers" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"> +Add new Vender</button>
       </div> 
      </div>

      <div class="form-group">
          <label for="exampleFormControlInput1"><b>Purchase order number</b></label>
          <input name="po" type="text" class="form-control" id="exampleFormControlInput2"><span class="hint" id="PO_feedback"></span>
      </div>
      <div class="form-group">
          <label for="exampleFormControlInput1"><b>Purchase Order Date</b></label>
          <input name="purchaseDate" type="date" class="form-control" id="exampleFormControlInput1" placeholder="dd/mm/yy"><span class="hint" id="pd_feedback"></span>
      </div>
      <h6 class="p-3 mb-4 mt-4 bg-primary text-white">2. Item Details</h2>
      <div id="items">
        <div class="form-row">
            <div class="form-group col-md-2">
              <label>Product</label>
              <input name="product[]" type="text" class="form-control"><span class="hint" id="product_feedback"></span>
            </div>
            <div class="form-group col-md-7">
              <label>Description</label>
              <input name="desc[]" type="text" class="form-control"><span class="hint" id="description_feedback"></span>
            </div>
            <div class="form-group col-md-1">
              <label>QTY</label>
              <input name="qty[]" type="number" class="form-control"><span class="hint" id="qty_feedback"></span>
            </div>
            <div class="form-group col-md-2">
              <label>Cost/Unit (in baht)</label>
              <input name="cost[]" type="number" class="form-control"><span class="hint" id="Cost_feedback"></span>
            </div>
        </div>
      </div>
    <button id="moreItems" type="button" class="btn btn-info">+Add more items</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>

<?php include 'footer.php';?>

<script type="text/javascript">

// form validation

  function validateForm(){
    var form = document.forms["form"];
    var ship = form["shipping"].value;
    var purchaseOrderNumber = form["po"].value;
    var puchaseDate = form["purchaseDate"].value;
    var product = document.getElementsByName("product[]");
    var decribtion = document.getElementsByName("desc[]");
    var quantity = document.getElementsByName("qty[]");
    var cost = document.getElementsByName("cost[]");

    var shouldSubmit = true; 
    if (ship == "") {
        document.getElementById("shipping_feedback").innerHTML = "Shipping address is required !";
          shouldSubmit = false;
    }
    if (purchaseOrderNumber == ""){
      document.getElementById("PO_feedback").innerHTML = "P.O number have to complete !";
       shouldSubmit = false;
    }
    if (puchaseDate == "") {
      document.getElementById("pd_feedback").innerHTML = "PuchaseDate is required !";
        shouldSubmit = false;
    }
      for( i= 0; i<product.length;i++){
          if(product[i].value == ""){
            document.getElementById("product_feedback").innerHTML = "Please complete all the products details!";
            shouldSubmit = false;
          }
        }
        for(i = 0; i<decribtion.length;i++){
          if(decribtion[i].value == ""){
            document.getElementById("description_feedback").innerHTML = "Please complete decribtion field !"
          }
        }
         for(i = 0; i<quantity.length;i++){
          if(quantity[i].value == ""){
            document.getElementById("qty_feedback").innerHTML = "Please complete quantity field !"
          }
        }
        for(i = 0; i<cost.length;i++){
          if(cost[i].value == ""){
            document.getElementById("Cost_feedback").innerHTML = "Please complete cost field !"
          }
        }
      return shouldSubmit;
  }
  // 
  $(document).ready(function(){
    $("#supplier_id").change(function() {
      var id = $("#supplier_id option:selected").val();
      $.post("controller.php", {
        'action': "get_supplier_address",
        'id': id
      }, function(data, status){
        $("#id_shipping_address").html(data);  
      });
    });
    
  });
  
</script>