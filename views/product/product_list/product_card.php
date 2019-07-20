
<style type="text/css">
    .product_card{
        margin-bottom: 10px;
        background-color: #ffffff;
        margin-right: 1px;
        padding: 4px;
        height: 210px;
        border-radius: 5px;
        border: 1px solid #DDDDDD;
        overflow: hidden;
        border-radius: 5px;
        cursor: pointer;
    }
    .product_card:hover{
        background-color: #f5f5f5;
    }
    .product_image{
        padding: 5px;
        height: 160px;
    }
    .product_detail{
        padding: 15px 0px 0px 0px;
    }
    .product_detail_td,.product_detail_td1{
        padding: 5px;
        font-size: 13px;
        border: 1px solid #DDDDDD;
    }
    .product_detail_td1{
        color: #242729;
    }
    .product_detail_td1{
        width: 35px;
        font-weight: bold;
        background-color: #f5f5f5;
    }
    .product_barcode{
        height: 37px;
        width: 100%;

    }
    .pro_img{
        margin-bottom: 8px;
        border-radius: 3px;
    }
    .row-no-padding {
        [class*="col-"] {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    }

    .product_sale {
        position: absolute;
        z-index: 99;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        transform: rotate(45deg);
}
.product_sale p {
    margin-left: 75px;
    margin-top: -10px;
    color: #fff;
    background: #ff0000;
    border-radius: 5px;
    padding: 3px 25px;
    box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.4);
  }


</style>
<div class="row product_card row-no-padding">
    <div class="">
        
        <div class="col-md-7">
            <div class="product_detail">
                <table width="100%">
                    <tr>
                        <td class="product_detail_td1">Id</td>
                        <td class="product_detail_td"><b>71</b></td>
                    </tr>
                    <tr>
                        <td class="product_detail_td1">Name</td>
                        <td class="product_detail_td"><b>Product Name</b></td>
                    </tr>
                    <tr>
                        <td class="product_detail_td1">Brand</td>
                        <td class="product_detail_td">Samsung</td>
                    </tr>
                    <tr>
                        <td class="product_detail_td1">Category</td>
                        <td class="product_detail_td">Samsung</td>
                    </tr>
                    <tr>
                        <td class="product_detail_td1">Price</td>
                        <td class="product_detail_td">Samsung</td>
                    </tr>
                    <tr>
                        <td class="product_detail_td1">Stock</td>
                        <td class="product_detail_td">50</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-5 product_image">
            
            <img src="<?php echo "$image"; ?>" alt="" class="pro_img img-responsivee" width="100%"  height="100%">
            <img class="product_barcode" src="https://pngimg.com/uploads/barcode/barcode_PNG47.png">
        </div>
    </div>
</div>


        
                