<!-- Modal -->
<div 
  class="modal fade" 
  id="pop-up-modal" 
  tabindex="-1" 
  role="dialog" 
  aria-hidden="true"
>

  <div class="modal-dialog" role="document">

    <div class="modal-content">
      <div class="modal-header">
        
        <h5 
          class="modal-title" 
          id="pop-up-modal-label"
        >
          {{ $modalTitle }}
        </h5>
        
        <button 
          type="button" 
          class="close" 
          data-dismiss="modal" 
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      
      </div>
      
      <div class="modal-body">
        {{ $modalContent }}
      </div>

      <div class="modal-footer">
        
        <button 
          type="button" 
          class="btn btn-secondary" 
          data-dismiss="modal"
        >
          Close
        </button>
        
        <button 
          type="button" 
          class="btn btn-primary"
        >
          {{ $saveButtonName }}
        </button>
      
      </div>

    </div>

  </div>

</div>