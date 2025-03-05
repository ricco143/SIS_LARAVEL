<div class="modal fade" id="triggerModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" id="closeModal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="" method="" id="studentForm">
                    @csrf
                    <div class="form-floating mb-3" id="studentIdGroup">
                        <input type="number" class="form-control" name="id" id="studentId" placeholder="123" min="1">
                        <label for="studentId"><i class="fas fa-id-card me-2"></i>Student ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="studentName" placeholder="Enter Name">
                        <label for="studentName"><i class="fas fa-user me-2"></i>Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="studentEmail" placeholder="Enter Email">
                        <label for="studentEmail"><i class="fas fa-envelope me-2"></i>Email Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                        <label for="address"><i class="fas fa-home me-2"></i>Address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" name="course" id="course" placeholder="Enter Course">
                        <label for="course"><i class="fas fa-graduation-cap me-2"></i>Course</label>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 py-2 fw-bold text-uppercase" id="submitButton"></button>
                </form>
            </div>
        </div>
    </div>
</div>