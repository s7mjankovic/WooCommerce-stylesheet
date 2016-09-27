<div class="section element-section" id="inputs">
	
	<h3 class="include-title">Other form elements</h3>

	<div class="items">
		<ul>
			<li>
				<label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" autocomplete="given-name" value="">
			</li>
			<li>
				<label class="valid">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text valid-input" name="billing_last_name"  placeholder="" autocomplete="family-name" value="">
			</li>
			<li>
				<label class="invalid">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text invalid-input" autocomplete="given-name" value="">
			</li>

			<li class="li-textarea">
				<label for="order_comments" class="">Order Notes</label><textarea   placeholder="Notes about your order, e.g. special notes for delivery." rows="5" cols="5"></textarea>
			</li>
			<li>
				<label>Sort:</label>
				<select name="orderby" class="orderby">
					<option value="menu_order" selected="selected">Default sorting</option>
					<option value="popularity">Sort by popularity</option>
					<option value="rating">Sort by average rating</option>
					<option value="date">Sort by newness</option>
					<option value="price">Sort by price: low to high</option>
					<option value="price-desc">Sort by price: high to low</option>
				</select>
			</li>
			<li>
				<div class="quantity">
				<label>Quantity:</label>
					<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
				</div>
			</li>
			
			<div class="clearfix"></div>
		</ul>
		<ul>

			<li>
				<label>Checkbox:</label>
				<label for="rememberme" class="inline">
					<input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me				</label>
			</li>
			<div class="clearfix"></div>
		</ul>	
	</div>

	<div class="contact-form-ul-wrapper">	
		<h4>Comment form</h4>
		<div class="row">
			<div class="col-sm-10 form-group">
				<label class="label-coment" for="comment">Your Review <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
			</div>
			<div class="col-sm-10 form-group">
				<label class="label-coment">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="120" aria-required="true" required="">
			</div>
			<div class="col-sm-10 form-group">
				<label class="label-coment">Email <span class="required">*</span></label> <input id="author" name="author" type="email" value="" size="120" aria-required="true" required="">
			</div>
		</div>
				
		</div>

</div>