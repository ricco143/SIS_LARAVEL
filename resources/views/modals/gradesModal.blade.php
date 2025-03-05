<div class="modal fade" id="triggerGradesModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 900px;">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title text-light" id="modalTitle">Student Grades Information</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" id="closeModal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="max-height: 500px; overflow-y:auto; scrollbar-width: thin;" class="custom-scrollbar">
                    <table class="table table-dark table-hover border-secondary">
                        <colGroup>
                            <col width="10%">
                            <col width="20%">
                            <col width="20%">
                            <col width="20%">
                            <col width="10%">
                        </colGroup>
                        <thead class="text-light bg-secondary">
                            <tr>
                                <th class="border-secondary">Subject code</th>
                                <th class="border-secondary">Subject name</th>
                                <th class="border-secondary">Grades</th>
                                <th class="border-secondary">Status</th>
                                <th class="border-secondary">Action</th>
                            </tr>
                        </thead>
                        <tbody id="gradeList">

                        </tbody>
                    </table>
                    <form action="" id="IdToDeleteGrade" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/stackModalHandler.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@include('modals.addGradeModal')
<script src="assets/js/gradeRequestHandler.js"></script>
<script>
    function deleteGrade(id) {
        console.log(id)
        if (!id) {
            return;
        }
        Swal.fire({
            title: "Delete",
            text: "Are you sure you want to delete this grade?",
            icon: "warning",
            showCancelButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById("IdToDeleteGrade");
                form.action = `/grade/${id}`
                console.log(form.action);
                form.submit();
            }
        });
    }
</script>
<style>
.custom-scrollbar::-webkit-scrollbar {
    width: 8px;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background: #1a1a1a;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background: #666;
    border-radius: 4px;
}

.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: #888;
}
</style>