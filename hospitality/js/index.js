var _extends = Object.assign || function (target) {for (var i = 1; i < arguments.length; i++) {var source = arguments[i];for (var key in source) {if (Object.prototype.hasOwnProperty.call(source, key)) {target[key] = source[key];}}}return target;};var _createClass = function () {function defineProperties(target, props) {for (var i = 0; i < props.length; i++) {var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;descriptor.configurable = true;if ("value" in descriptor) descriptor.writable = true;Object.defineProperty(target, descriptor.key, descriptor);}}return function (Constructor, protoProps, staticProps) {if (protoProps) defineProperties(Constructor.prototype, protoProps);if (staticProps) defineProperties(Constructor, staticProps);return Constructor;};}();function _toConsumableArray(arr) {if (Array.isArray(arr)) {for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) {arr2[i] = arr[i];}return arr2;} else {return Array.from(arr);}}function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}}var basket = new Vue({
	el: "#bsk",
	data: {
		items: [],
		storagename: '_local_basket_',
		sendWindow: false,
		name: '',
		email: '',
		phone: '',
		bannerContent: '',
		bannerStatus: false,
		outputLink: null },

	methods: {
		changeStorage: function changeStorage(type, id) {
			if (type === "add") {
				this.items.forEach(function (item) {
					if (item.id === id) {
						item.amount = item.amount += 1;
					}
				});
			} else if (type === "delete") {
				this.items = this.items.filter(function (item) {return item.id !== id;});
			} else if (type === 'count_down') {
				this.items.forEach(function (item) {
					if (item.id === id) {
						if (item.amount > 0) {
							item.amount -= 1;
						}
					}
				});
			}
			this.localStorageActions();
		},
		getDB: function getDB() {
			this.items = JSON.parse(localStorage.getItem('_local_basket_')) || [];
		},
		setBasketAmount: function setBasketAmount(element) {
			this.outputLink = element;
		},
		setAmount: function setAmount() {
			this.outputLink.innerHTML = '( ' + this.items.length + ' )';
		},
		localStorageActions: function localStorageActions() {
			localStorage.removeItem(this.storagename);
			var sendData = JSON.stringify(this.items);
			localStorage.setItem(this.storagename, sendData);
		},
		minMeth: function minMeth(id) {
			this.changeStorage('count_down', id);
		},
		maxMeth: function maxMeth(id) {
			this.changeStorage('add', id);
		},
		delMeth: function delMeth(id) {
			this.changeStorage('delete', id);
			this.setAmount();
		},
		toggleSendWindow: function toggleSendWindow() {
			this.sendWindow = !this.sendWindow;
		},
		sendOrder: function sendOrder() {
			var order = {
				items: this.items,
				totals: this.getTotal(),
				self: {
					name: this.name,
					email: this.email,
					phone: this.phone } };


			this.banner('You order send!');
			if (order.self.name && order.self.email && order.self.phone) {
				//alert('And now AXIOS time!!!!')
			}
		},
		banner: function banner(content) {var _this = this;
			this.bannerContent = content;
			this.bannerStatus = true;
			setTimeout(function () {_this.bannerStatus = false;}, 1000);
		},
		getTotal: function getTotal() {
			var output = { w: 0, p: 0 };
			this.items.forEach(function (item) {
				output.w += +item.weight * +item.amount;
				output.p += +item.price * +item.amount;
			});
			return output;
		} },

	created: function created() {
		this.items = JSON.parse(localStorage.getItem('_local_basket_')) || [];
		this.setAmount();
	},
	mounted: function mounted() {

	},
	computed: {
		getTotalValues: function getTotalValues() {
			var output = { w: 0, p: 0 };
			this.items.forEach(function (item) {
				output.w += +item.weight * +item.amount;
				output.p += +item.price * +item.amount;
			});
			return output;
		},
		emptyArray: function emptyArray() {
			return this.items.length === 0 ? true : false;
		} } });var



BasketComponent = function () {
	function BasketComponent() {_classCallCheck(this, BasketComponent);
		this.namespace = 'basket-component';
		this.storagename = '_local_basket_';
		this.addClasses = ['card-item__add-button'];
		this.toggleBasketElement = document.querySelector('.basket-toggle');
		this.basket = document.querySelector('.' + this.namespace);
		this.counter = document.querySelector('.basket-toggle__counter');

		this.init();
	}_createClass(BasketComponent, [{ key: 'toggleBasket', value: function toggleBasket()
		{var _this2 = this;
			this.toggleBasketElement.addEventListener('click', function () {
				_this2.basket.classList.toggle('basket-component--isActive');
			});
		} }, { key: 'setControllers', value: function setControllers()
		{var _this3 = this;
			var elements = [];
			this.addClasses.forEach(function (v) {
				var e = document.querySelectorAll('.' + v);
				elements = [].concat(_toConsumableArray(elements), _toConsumableArray(e));
			});
			elements.forEach(function (element) {
				element.addEventListener('click', function (e) {
					var currentDataClick = {
						"id": e.target.getAttribute('data-item-id'),
						"img": e.target.getAttribute('data-item-img'),
						"name": e.target.getAttribute('data-item-name'),
						"weight": e.target.getAttribute('data-item-weight'),
						"price": e.target.getAttribute('data-item-price'),
						"amount": 1 };

					_this3.localStorageActions('add', currentDataClick);
					basket.getDB();
					_this3.counter.textContent = '( ' + JSON.parse(localStorage.getItem('_local_basket_')).length + ' )';
				});
			});
		} }, { key: 'outputLink', value: function outputLink()
		{
			return this.counter;
		} }, { key: 'localStorageActions', value: function localStorageActions(
		type, value, storage_data_base) {

			var data = JSON.parse(localStorage.getItem(this.storagename)) || [],
			middleValue = '',
			sendData = '';

			function isContain() {
				if (data.length !== 0) {
					return data.find(function (v) {return v.id === value.id;});
				}
				return false;
			}

			var filterElements = data.filter(function (element) {return value.id !== element.id;});
			var findElement = data.find(function (element) {return value.id === element.id;});

			if (type === 'add') {
				if (isContain()) {
					var currentAmount = +findElement.amount;
					currentAmount += 1;
					var fe = _extends({}, findElement, { amount: currentAmount });
					middleValue = [].concat(_toConsumableArray(filterElements), [fe]);
				} else
				{
					middleValue = [].concat(_toConsumableArray(data), [value]);
				}
			}
			sendData = JSON.stringify(middleValue);
			localStorage.setItem(this.storagename, sendData);
		} }, { key: 'initBasketLength', value: function initBasketLength()
		{
			var bsk = JSON.parse(localStorage.getItem('_local_basket_'));
			this.counter.textContent = '( ' + (bsk ? bsk.length : 0) + ' )';
		} }, { key: 'init', value: function init()
		{
			this.toggleBasket();
			this.setControllers();
			this.initBasketLength();
		} }]);return BasketComponent;}();


var _basket = new BasketComponent();

basket.setBasketAmount(_basket.outputLink());