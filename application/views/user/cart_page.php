<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:300,400,900);
@import url(https://i.icomoon.io/public/c88de6d4a5/CartIcons/style.css);
.cf:before, .cf:after {
  content: "\0020";
  display: block;
  height: 0;
  overflow: hidden; }
.cf:after {clear: both; }
.cf {zoom: 1; }
html {
  box-sizing: border-box;
  overflow-y: scroll; }
*,
*:before,
*:after {
  box-sizing: inherit; }

body{
  font-family:'Lato', 'helvetica', arial, sans-serif!important;
  font-size:100%;
  font-weight:400;
  color:#424242;
  line-height:1.3;
}
strong{
  font-weight:900
}

.wrap{
  width:85%;
  max-width:1024px;
  margin:0 auto;
  padding:100px 0;
}
.btn{
  display:inline-block;
  font-size:.9em;
  padding:12px 30px;
  background:#ffc21d;
  color:#232323;
  font-weight:900;
  cursor:pointer;
  text-transform:uppercase;
  font-weight:700;
  letter-spacing:2px;
  opacity:1;
  transition:opacity .3s;
  &:hover{
    opacity:.8
  }
}
.blue-link{
  color:#659BAF;
  cursor:pointer;
  &:hover{
    color:#223840;        
  }
}
.cart-header{
  border-bottom:1px solid #ccc;
  padding-bottom:20px;
  position: relative;
  strong{
    font-size:1.8em;
    position: relative;
    // top:14px;
    font-weight:400;
    line-height:1;
  }
  .btn{
    position:absolute;
    bottom:10px;
    right:0;
  }
}
.bonus-products{
  border:1px solid #ccc;
  border-top:none;
  padding:18px;
  background:rgba(0,0,0,.05);
  strong{
    font-weight:400;
    color:#888;
    font-size:.8em;
    .bp-toggle{
      font-size:.7em;
      // color:blue;
      cursor:default;
    }
  }
  
}

.cart-table{
  padding:10px 0 0;
  border-bottom:1px solid #ccc;
  ul{
    li{
    }
  }  
}

.item{
  border-bottom:1px solid #ccc;
  // padding-bottom:10px;
  margin-bottom:10px;
  &:last-child{
    border-bottom:none;
    padding-bottom:0;
    margin-bottom:0;
  }
  .item-block{
    float:left;

    &.ib-info{
      width:60%;
      img.product-img{
        float:left;
        display:block;
        width:100px;
        margin-right:15px;
      }
      .ib-info-meta{
        float:left;
      }
      span{
        display:block;
        margin-bottom:3px;
        &.title{
          font-size:1em;
        }
        &.itemno{
          color:#888;
          font-size:.8em;
        }
        &.styles{
          border-left:3px solid rgba(0,0,0,.1);
          padding-left:5px;
          font-size:.8em;
          strong{
            display:inline-block;
            min-width:70px;
          }
          .blue-link{
            font-size:.8em;
          }
        }
      }
    }
    &.ib-qty{
      width:20%;
      text-align:right;
      input{
        text-align:center;
        font-size:16px;
        border-radius:0;
        outline:none;
        border:1px solid #ccc;
        // padding:12px;
        width:50px;
        height:40px;
        vertical-align:middle;
        color:#555;
        &:focus{
          border-color:#7BCDE8;
        }
      }
      span.price{
        display:inline-block;
        color:#777;
        >span{
          margin:0 5px;
        }
      }
    }
    &.ib-total-price{
      width:20%;
      text-align:right;
      padding-top:6px;
      position: relative;
      span{
        color:#555;
        &.tp-price{
          font-size:1.4em;
          font-weight:900;          
        }
        &.tp-remove{
          font-size:14px;
          margin-left:10px;
          position: relative;
          top:-2px;
          // position:absolute;
          // right:-35px; 
          // top:12px;
          cursor:pointer;
          &:hover{
            color:red;
          }
        }
      }
    }
  }
  .item-foot{
    // border-top:1px dotted #ccc;
    padding:0 0 10px 0;
    margin-top:10px;
    font-size:.7em;
    i{
      position: relative;
      font-size:12px;
    }
    .if-message{
      float:left;
      width:100%;
      // padding-bottom:10px;
      margin-bottom:10px;
      color:#777;
      // padding-left:10px;
      
    }
    .if-left{
      float:left;
      color:#ccc;
      font-size:115%;
      text-transform:uppercase;
    }
    .if-right{
      float:right;
      color:#ccc;
      padding-top:2px;
      text-transform:uppercase
    }
    .if-status{
      font-weight:900;
      color:#333;
      // padding-left:10px;
    }
  }
}
.item .bundle-block{
  padding:0 0 10px  50px;
  position: relative;
  // width:60%;
  // border-top:1px dotted #ccc;
  ul{
    li{
      position: relative;
      display:block;
      width:100%;
      margin-top:10px;
      padding-top:5px;
      i.i-down-right-arrow{
        display:block;
        position:absolute;
        left:-30px;
        font-size:12px;
        top:50%;
        margin-top:-6px;
        color:#999;
      }     
      img{
        width:100%;
        max-width:48px;
        display:block;
        float:left;
        margin-right:15px;
      }
      span{
        display:block;
        &.bundle-title{
          font-size:.85em;
        }
        &.bundle-itemno{
          color:#888;
          font-size:.7em;
        }
      }
    }
  }
}

.sub-table{
  margin:20px 0 20px;
  position: relative;
  .copy-block{
    float:left;  
    margin-top:60px;
    p{
      font-size:.7em;
      color:#666;
      max-width:320px;
      line-height:1.55;
      display:block;
      a{
        
        &:link,
        &:visited{
          color:#666;
          // border-bottom:1px solid;
          // text-decoration:none;
        }
        &:hover,
        &:focus{
          color:#333;
        }
      }
      &.customer-care{
        padding-top:10px;
        margin-top:10px;
        border-top:1px solid #ccc;
      }
    }

  }
  .summary-block{
    float:right;
    .sb-promo{
      // display:none;
      border-bottom:1px solid #ccc;
      padding-bottom:10px;
      margin-bottom:10px;
      position: absolute;
      top:0;
      left:0;
      width:320px;
      input{
        font-size:16px;
        width:220px;
        padding:7px;
        margin-right:5px;
        vertical-align:top;
        color:#777;
      }
      .btn{
        padding:10px 8px;
        font-size:.8em;

      }  
    }      
    ul{
      li{
        margin-bottom:10px;
        font-size:.9em;
        text-align:right;
        span{
          display:inline-block;
        }
        span.sb-label{
          color:#999;
          text-transform:uppercase;
          letter-spacing:1px;
        }
        span.sb-value{
          font-size:1.1em;
          width:120px;
        }
        &.tax{
          .tax-edit{
            color:#223840;
            font-size:.8em;
            font-weight:900;
            text-transform:capitalize;
            cursor:pointer;
            i{
              position: relative;
              top:1px;
              left:-3px;
            }
            &.te-open{
              i:before{
                content: "\edc7";
              }
            }
            
          }
        }
        &.tax-calculate{
          padding:10px;
          margin-top:10px;
          background:rgba(0,0,0,.05);
          display:none;
          input{
            font-size:16px;
            width:148px;
            padding:7px;
            margin-right:5px;
            vertical-align:top;
            color:#777;
          }
          .btn{
            padding:10px 8px;
            font-size:.8em;
            
          }
        }
        &.grand-total{
          border-top:1px solid #ccc;
          padding-top:10px;
          margin-top:10px;
          font-size:1.2em;
          font-weight:900;
        }        
      }
      
    }
  }
}
.cart-footer{
  border-top:1px solid #ccc;
  margin-top:15px;
  padding-top:15px;
  .cont-shopping{
    float:left;
    font-size:.8em;
    padding-top:10px;
    cursor:pointer;
    i{
      position: relative;
      top:0px;
      margin-right:6px;
      font-size:75%;
    }
  }
  .btn{
    float:right;
    width:200px;
    text-align:center;
  }
}


@media only screen and (max-width:860px){
  .item-main{
    position: relative;
  }
  .item .item-block.ib-info {
    width: 70%;
  }
  .item .item-block.ib-qty {
    width: 30%;
    text-align: right;
  }  
  .item .item-block.ib-total-price {
    width: auto;
    text-align: right;
    padding-top:0;
    position: absolute;
    top:50px;
    right:0;
  }
  .sub-table .copy-block{
    float:right;
    margin-top:0;
    text-align:right;
    // border-top:1px solid #ccc;
    padding:12px;
    background:rgba(0,0,0,.035);
  }
  .sub-table .summary-block {
    float:none;
    width:100%;
    margin-top:55px;
    .sb-promo{
      position: absolute;
      top: 0;
      left: auto;
      right: 0;
      max-width: 300px;
      text-align: right;
      border-bottom: none;
    }
    
  }
}

@media only screen and (max-width:630px){
  .item .item-block.ib-info {
    float:left;
    width: 100%;
  }
  .item .item-block.ib-qty {
    float:left;
    width:auto;
    margin-top:10px;
  }
  .item .item-block.ib-total-price {
    float:left;
    width:auto;
    position: relative;
    top:13px;
    right:0;
    border-left:1px solid #ccc;
    padding-left:15px;
    margin-left:15px;
  }
  .item .bundle-block{
    display:none;
  }
  .item .item-block.ib-info img.product-img{
    width:70px;
  }
}

@media only screen and (max-width:480px){

}


</style>

<div class="wrap">

  <header class="cart-header cf">
    <strong>Items in Your Cart</strong>
    <span class="btn">Checkout</span>
  </header>
  <div class="bonus-products">
    <strong>Bonus Products Block <span class="bp-toggle">(hide this block)</span></strong>
    
  </div>
  <div class="cart-table">
    <ul>

<!-- begin simple product -->
      <li class="item">
        <div class="item-main cf">
          <div class="item-block ib-info cf">
            <img class="product-img" src="http://fakeimg.pl/150/e5e5e5/adadad/?text=IMG" />
            <div class="ib-info-meta">
              <span class="title">Drink Up Nalgene Water Bottle</span>
              <span class="itemno">#3498765</span>
            </div>
          </div>
          <div class="item-block ib-qty">
            <input type="text" value="3" class="qty" />
            <span class="price"><span>x</span> $25.00</span>
          </div>
          <div class="item-block ib-total-price">
            <span class="tp-price">$75.00</span>
            <span class="tp-remove"><i class="i-cancel-circle"></i></span>
          </div>         
        </div>
        <div class="item-foot cf">
          <!-- <div class="if-message"><p>Space Reserved for item/promo related messaging</p></div> -->
          <div class="if-left"><span class="if-status">In Stock</span></div>
          <div class="if-right"><!-- <span class="blue-link">Subscription Options</span> | --><span class="blue-link">Add to Wishlist</span></div>
        </div>
      </li>
<!-- end simple product -->


<!-- begin variation product w/ option -->
      <li class="item">
        <div class="item-main cf">
          <div class="item-block ib-info cf">
            <img class="product-img" src="http://fakeimg.pl/150/e5e5e5/adadad/?text=IMG" />
            <div class="ib-info-meta">
              <span class="title">Drink Up Nalgene Water Bottle</span>
              <span class="itemno">#3498765</span>
              <span class="styles">
                <span><strong>Color</strong>: Neon Green</span>
                <span><strong>Size</strong>: 32oz</span>
                <span><strong>Warranty</strong>: 3 Years</span>
                <span class="blue-link">Edit Details</span>
              </span>
            </div>
          </div>
          <div class="item-block ib-qty">
            <input type="text" value="3" class="qty" />
            <span class="price"><span>x</span> $25.00</span>
          </div>
          <div class="item-block ib-total-price">
            <span class="tp-price">$75.00</span>
            <span class="tp-remove"><i class="i-cancel-circle"></i></span>
          </div>         
        </div>
        <div class="item-foot cf">
          <div class="if-message"><p> Item/promo related messaging shows up here</p></div>
          <div class="if-left"><span class="if-status">In Stock</span></div>
          <div class="if-right"><span class="blue-link">Gift Options</span> | <span class="blue-link">Add to Registry</span> | <span class="blue-link">Add to Wishlist</span></div>
        </div>
      </li>
<!-- end variation product w/ option -->



<!-- begin bundle product -->
      <li class="item">
        <div class="item-main cf">
          <div class="item-block ib-info cf">
            <img class="product-img" src="http://fakeimg.pl/150/e5e5e5/adadad/?text=IMG" />
            <div class="ib-info-meta">
              <span class="title">Drink Up Nalgene Water Bottle</span>
              <span class="itemno">#3498765</span>
              <span class="styles">
                <span><strong>Color</strong>: Neon Green</span>
                <span><strong>Size</strong>: 32oz</span>
                <span><strong>Warranty</strong>: 3 Years</span>
                <span class="blue-link">Edit Details</span>
              </span>
            </div>
          </div>
          <div class="item-block ib-qty">
            <input type="text" value="3" class="qty" />
            <span class="price"><span>x</span> $25.00</span>
          </div>
          <div class="item-block ib-total-price">
            <span class="tp-price">$75.00</span>
            <span class="tp-remove"><i class="i-cancel-circle"></i></span>
          </div>         
        </div>
        <div class="bundle-block">
          <ul>
            <li class="cf">
              <i class="i-down-right-arrow"></i>
              <img class="bundle-img" src="http://fakeimg.pl/100/e5e5e5/adadad/?text=IMG" />
              <span class="bundle-title">Nalgene Orange Cap</span>
              <span class="bundle-itemno">#9872656</span>
            </li>
          <li class="cf">
              <i class="i-down-right-arrow"></i>
              <img class="bundle-img" src="http://fakeimg.pl/100/e5e5e5/adadad/?text=IMG" />
              <span class="bundle-title">Nalgene Orange Cap</span>
              <span class="bundle-itemno">#9872656</span>
            </li>            
          </ul>

        </div>
        <div class="item-foot cf">

          <div class="if-left"><span class="if-status">In Stock</span></div>
          <div class="if-right"><span class="blue-link">Gift Options</span> | <span class="blue-link">Add to Registry</span> | <span class="blue-link">Add to Wishlist</span></div>
        </div>
      </li>
<!-- end bundle product -->
    </ul>
  </div>
  <div class="sub-table cf">
    <div class="summary-block">
      <div class="sb-promo">
        <input type="text" placeholder="Enter Promo Code" />
        <span class="btn">Apply</span>
      </div>        
      <ul>
        <li class="subtotal"><span class="sb-label">Subtotal</span><span class="sb-value">$25.99</span></li>
        <li class="shipping"><span class="sb-label">Shipping</span><span class="sb-value">n/a</span></li>
        <li class="tax"><span class="sb-label">Est. Tax | <span class="tax-edit">edit <i class="i-notch-down"></i></span></span><span class="sb-value">$5.00</span></li>
        <li class="tax-calculate"><input type="text" value="06484" class="tax" /><span class="btn">Calculate</span></li>
        <li class="grand-total"><span class="sb-label">Total</span><span class="sb-value">$120.99</span></li>
      </ul>
    </div>
    <div class="copy-block">    
      <p>Items will be saved in your cart for 30 days. To save items longer, add them to your <a href="#">Wish List</a>.</p>
      <p class="customer-care">
        Call us M-F 8:00 am to 6:00 pm EST<br />
        (877)-555-5555 or <a href="#">contact us</a>. <br />     
      </p>
    </div>    
  </div>
  
  <div class="cart-footer cf">
      <span class="btn">Checkout</span>
      <span class="cont-shopping"><i class="i-angle-left"></i>Continue Shopping</span>    
  </div>
</div>