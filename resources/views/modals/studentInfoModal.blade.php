<div class="modal fade" id="triggerModalStudentInformation" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 1000px;">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-light" id="modalTitle">Student Enrollment Information</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" id="closeModal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-light">
                <!-- Student Info Card -->
                <div id="informationContainer" class="card mb-4 bg-light">
                    <div class="card-body d-flex gap-4 justify-content-between align-items-center text-dark">
                        <div class="student-info">
                            <p class="mb-2"><strong>ID:</strong> <span id="student_id" class="ms-2"></span></p>
                            <p class="mb-2"><strong>Name:</strong> <span id="student_name" class="ms-2"></span></p>
                        </div>
                        <div class="student-info">
                            <p class="mb-2"><strong>Email:</strong> <span id="email" class="ms-2"></span></p>
                            <p class="mb-2"><strong>Course:</strong> <span id="student_address" class="ms-2"></span></p>
                        </div>
                        <div>
                            <button class="btn btn-dark rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#triggerGradesModal">
                                <i class="fas fa-eye me-2 text-light"></i>View Grades
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Enrollment Table -->
                <div class="table-responsive" style="max-height: 500px;">
                    <table class="table table-hover">
                        <colGroup>
                            <col width="10%">
                            <col width="20%">
                            <col width="20%">
                            <col width="20%">
                            <col width="20%">
                            <col width="10%">
                        </colGroup>
                        <thead style="position: sticky; top: 0;" class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Subject code</th>
                                <th>Subject name</th>
                                <th>Units</th>
                                <th>Instructor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="enrollmentList">

                        </tbody>
                    </table>
                </div>
                <form action="" id="IdToDelete" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                </form>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/gradesModalHandler.js"></script>

<script>
    function deleteSubject(id) {
        console.log(id);
        Swal.fire({
            title: "Delete",
            text: "Are you sure you want to delete this subject?",
            icon: "warning",
            showCancelButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById("IdToDelete");
                form.action = `/student/enroll/${id}`
                console.log(form.action);
                form.submit();
            }
        });

    }
</script>


@include('modals.gradesModal')



<style>
.student-info p {
    font-size: 16px;
    margin-bottom: 0.5rem;
}

/* Styling for scrollbars */
.table-responsive::-webkit-scrollbar {
    width: 8px;
}

.table-responsive::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.table-responsive::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.table-responsive::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* Center text inside the enrollment table (both thead and tbody) */
#enrollmentList td, 
#enrollmentList th,
thead th {
    text-align: center;
    vertical-align: middle;
}
</style>
