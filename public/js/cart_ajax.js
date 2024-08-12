function increaseNumber()
{
    // Lấy giá trị của nút tăng
    var plus = parseInt(document.getElementById('increase_btn').val);
    
    // Tăng giá trị số lượng
    document.querySelector('#quantity').value++;
   
    // Cập nhật tổng giá tiền
    updateTotal();
}

function decreaseNumber()
{
    var minus = parseInt(document.getElementById('decrease_btn').value);
    var quantity = parseInt(document.getElementById('quantity').value);
    if(quantity > 1)
    {
        document.querySelector('#quantity').value--;
    }

    // Cập nhật tổng giá tiền
    updateTotal();
}

// Hàm định dạng số thành chuỗi có định dạng tiền tệ
function numberFormat(price) {
  // Chuyển đổi giá thành chuỗi
  let formattedPrice = price.toLocaleString('en-US', { minimumFractionDigits: 0, maximumFractionDigits: 1 });

  // Loại bỏ phần thập phân nếu là ".0"
  formattedPrice = formattedPrice.replace(/\.0$/, '');

  return formattedPrice + '₫'; // Kết quả được thêm ký hiệu tiền tệ (đồng Việt Nam)
}

var price = 0;
var voucher = 0;
var idProduct;
var nameVoucher;


// Hàm cập nhật tổng giá tiền
async function updateTotal() {
   await getPrice(); // Lấy giá sản phẩm từ server
   var quantity = parseInt(document.getElementById('quantity').value);
   var total_price = quantity * price;

   // Sử dụng jQuery để cập nhật tổng giá tiền
   $('#total').text(numberFormat(total_price));
}

// Hàm lấy giá sản phẩm từ server
async function getPrice(){
    await $.ajax({
        url: '?mod=users&action=getPrice',
        method: 'POST',
        data: {
          id: idProduct,
          // Thêm các cặp key-value khác nếu cần thiết
        },
        success: function(response) {
          price = JSON.parse(response)['product_price'];
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(errorThrown);
          // Xử lý khi có lỗi
        }
      });
}

var addCartBtn = document.querySelector('button#addCart');

// Hàm lấy ID sản phẩm từ URL
function getID(){
  const urlParams = new URLSearchParams(window.location.search);
  return parseInt(urlParams.get('id'));
}

// Hàm thêm sản phẩm vào giỏ hàng
async function addToCart(){
  var qty = document.querySelector('#quantity').value;
  var id = getID();

  await $.ajax({
    url: '?mod=users&action=addCart',
    method: 'POST',
    data: {
      id: id,
      qty: qty
      // Thêm các cặp key-value khác nếu cần thiết
    },
    success: function(response) {
      if(response == true){
        alert('Thêm vào giỏ hàng thành công');
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.log(errorThrown);
      // Xử lý khi có lỗi
    }
  });
}

// Hàm lấy voucher
async function getVoucher()
{
  await $.ajax({
      url:'?mod=users&action=getVoucher',
      method: 'POST',
      data: {
        name : nameVoucher,
      },
      success: function(response) {
        voucher = JSON.parse(response)['voucher_discount'];
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(errorThrown);
        // Xử lý khi có lỗi
      }

  });
}

// Hàm dùng voucher
async function applyVoucher() {
  await getVoucher();
  var quantity = parseInt(document.getElementById('quantity').value);
  var total_price = quantity * price;
  var total_after_use_voucher = total_price / quantity * (1 - voucher / 100);

  // Sử dụng jQuery để cập nhật tổng giá tiền
  $('#total').text(numberFormat(total_after_use_voucher));
}

// Sự kiện khi trang web đã tải
$(document).ready(async function(){
  idProduct = getID();
  idVoucher = getVoucher();
  await getPrice(); // Lấy giá sản phẩm từ server
  await getVoucher();
  // console.log(getID());
  updateTotal(); // Cập nhật tổng giá tiền
  applyVoucher();
});