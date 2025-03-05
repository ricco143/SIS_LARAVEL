<div class="modal fade" id="triggerModalSubject" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-white ">
                <h5 class="modal-title text-dark" id="modalTitle"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" id="closeModal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="" method="" id="subjectForm">
                    @csrf
                    <div class="form-floating mb-3" id="subjectIdGroup">
                        <input type="number" class="form-control" name="id" id="subjectId" placeholder="123" min="1" readonly>
                        <label for="subjectId"><i class="fas fa-id-card me-2"></i>ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="code" id="subjectCode" placeholder="Enter Name" readonly>
                        <label for="subjectCode"><i class="fas fa-book me-2"></i>Subject Code</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="subjectName" placeholder="Enter Name" readonly>
                        <label for="subjectName"><i class="fas fa-bookmark me-2"></i>Subject Name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="number" class="form-control" name="units" id="units" placeholder="Enter Name" readonly>
                        <label for="units"><i class="fas fa-clock me-2"></i>Units</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" name="instructor" id="instructor" placeholder="Enter Name" readonly>
                        <label for="instructor"><i class="fas fa-user me-2"></i>Instructor</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 py-2 fw-bold text-uppercase" id="submitButton"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('triggerModalSubject');
    modal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const mode = button.getAttribute('data-mode');
        const form = document.getElementById('subjectForm');
        const submitButton = document.getElementById('submitButton');
        const inputs = form.querySelectorAll('input');
        
        // Configure form based on mode
        if (mode === 'view') {
            submitButton.style.display = 'none';
            inputs.forEach(input => {
                input.readOnly = true;
            });
        } else if (mode === 'add') {
            submitButton.style.display = 'block';
            submitButton.textContent = 'Add Subject';
            inputs.forEach(input => {
                if (input.name !== 'id' && input.name !== '_token') {
                    input.readOnly = false;
                }
            });
        } else if (mode === 'edit') {
            submitButton.style.display = 'block';
            submitButton.textContent = 'Update Subject';
            inputs.forEach(input => {
                if (input.name !== 'id' && input.name !== '_token') {
                    input.readOnly = false;
                }
            });
        }
        // Set form values
        document.getElementById('subjectId').value = button.getAttribute('data-id');
        document.getElementById('subjectCode').value = button.getAttribute('data-code');
        document.getElementById('subjectName').value = button.getAttribute('data-name');
        document.getElementById('units').value = button.getAttribute('data-units');
        document.getElementById('instructor').value = button.getAttribute('data-instructor');
        
        // Set form attributes
        form.action = button.getAttribute('data-action');
        form.method = button.getAttribute('data-method');
    });
});
</script>