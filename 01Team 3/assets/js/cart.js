jQuery(document).ready(function($) {

	var productItem = [{
			productName: "FinePix Pro2 3D Camera",
			price: "1800.00",
			photo: "camera.jpg"
		},
		{
			productName: "EXP Portable Hard Drive",
			price: "800.00",
			photo: "external-hard-drive.jpg"
		},
		{
			productName: "Luxury Ultra thin Wrist Watch",
			price: "500.00",
			photo: "laptop.jpg"
		},
		{
			productName: "XP 1155 Intel Core Laptop",
			price: "1000.00",
			photo: "watch.jpg"
		}];
	showProductGallery(productItem);
});

function addToCart(element) {
	debugger;
	console.log(element)
	var productParent = $(element).closest('div.product-item');

	var price = $(productParent).find('.price span').text();
	var productName = $(productParent).find('.productname').text();
	var quantity = $(productParent).find('.quantity').val();

	var cartItem = {
		productName: productName,
		price: price,
		quantity: quantity
	};
	var cartItemJSON = JSON.stringify(cartItem);

	var cartArray = new Array();
	// If javascript shopping cart session is not empty
	if (sessionStorage.getItem('shopping-cart')) {
		cartArray = JSON.parse(sessionStorage.getItem('shopping-cart'));
	}
	cartArray.push(cartItemJSON);

	var cartJSON = JSON.stringify(cartArray);
	sessionStorage.setItem('shopping-cart', cartJSON);
	showCartTable();
}

function emptyCart() {
	if (sessionStorage.getItem('shopping-cart')) {
		// Clear JavaScript sessionStorage by index
		sessionStorage.removeItem('shopping-cart');
		showCartTable();
	}
}

function removeCartItem(index) {
	if (sessionStorage.getItem('shopping-cart')) {
		var shoppingCart = JSON.parse(sessionStorage.getItem('shopping-cart'));
		sessionStorage.removeItem(shoppingCart[index]);
		showCartTable();
	}
}

function showCartTable() {
	var cartRowHTML = "";
	var itemCount = 0;
	var grandTotal = 0;

	var price = 0;
	var quantity = 0;
	var subTotal = 0;

	if (sessionStorage.getItem('shopping-cart')) {
		var shoppingCart = JSON.parse(sessionStorage.getItem('shopping-cart'));
		itemCount = shoppingCart.length;

		//Iterate javascript shopping cart array
		shoppingCart.forEach(function(item) {
			var cartItem = JSON.parse(item);
			price = parseFloat(cartItem.price);
			quantity = parseInt(cartItem.quantity);
			subTotal = price * quantity

			cartRowHTML += "<tr>" +
				"<td>" + cartItem.productName + "</td>" +
				"<td class='text-right'>$" + price.toFixed(2) + "</td>" +
				"<td class='text-right'>" + quantity + "</td>" +
				"<td class='text-right'>$" + subTotal.toFixed(2) + "</td>" +
				"</tr>";

			grandTotal += subTotal;
		});
	}

	$('#cartTableBody').html(cartRowHTML);
	$('#itemCount').text(itemCount);
	$('#totalAmount').text("$" + grandTotal.toFixed(2));
}

function showProductGallery(product) {
	//Iterate javascript shopping cart array
    console.log(product);
	var productHTML = "";
	product.forEach(function(item) {

                                productHTML +=  '<div class="single-cart-item d-flex">'+
                                            '<figure class="product-thumb">'+
                                                '<a href="#"><img class="img-fluid" scr="assets/images/products/' + item.photo + '" alt="Products" /></a>'+
                                            '</figure>'+
                                            '<div class="product-details">'+
   
                                                '<div class="cal d-flex align-items-center product-item" >'+
												  '<h2><span class="productname">'+ item.productName +'</span></h2>'+
                                                    '<span class="quantity">1</span>'+
                                                    '<span class="multiplication">X</span>'+
                                                    '<span class="price">$' + item.price + '</span>'+
                                                '</div> </div>'+
                                            
                                            '<a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>'+
                                       ' </div>';

		
	});
    console.log(productHTML);
	$('#cart-products').html(productHTML);
}
