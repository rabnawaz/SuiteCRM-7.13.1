/**
 * Insert product line
 */

function addLineItemHandlers() {
  $html = `<div class="input-group email-address-input-group email-address-line-container lineItem">
  <input type="text" id="foo01" name="itemText[]" value="first name" width="80%" />
  <textarea id="foo02" name="itemDescription[]" width="100%" style="width:100%"></textarea>
  <div class="input-group-btn">
      <button type="button" class="btn btn-danger email-address-remove-button removeItem" onclick="removeLineItemHandlers(this)"
         name="0" title="Line Item" tabindex="0" enabled="true"
          data-row="LineItem">
          <span class="suitepicon suitepicon-action-minus"></span>
      </button>
  </div>
</div>`;

  $('#lineItemAdd').append($html);

}
function removeLineItemHandlers(elem){
  elem.parentElement.parentElement.remove();
}
