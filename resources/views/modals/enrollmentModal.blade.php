<div class="modal fade" id="triggerModalInformation" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header border-bottom text-dark">
                <h5 class="modal-title">
                    <i class="fas fa-book-reader me-2"></i>Enroll Subjects
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="enrollmentForm" method="POST" action="{{ route('enroll.store') }}">
                    @csrf
                    <input type="hidden" name="studentId" id="id">
                    
                    <div class="mb-4">
                        <label class="form-label fw-bold text-white">Select Subject</label>
                        <div class="subject-list" style="max-height: 300px; overflow-y: auto;">
                            <div id="subjectsList">
                                <div class="no-subjects-message text-center py-3 text-muted" style="display: none;">
                                    <i class="fas fa-info-circle me-2"></i>No subjects available
                                </div>
                                <!-- Subjects will be loaded here dynamically -->
                            </div>
                        </div>
                        <input type="hidden" name="subject_id" id="selectedSubject">
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-2 fw-bold">
                        <i class="fas fa-plus-circle me-2"></i>Enroll Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function loadSubjects(subjects) {
    const subjectsList = document.getElementById('subjectsList');
    subjectsList.innerHTML = ''; // Clear previous content

    if (!subjects || subjects.length === 0) {
        subjectsList.innerHTML = `
            <div class="text-center py-3 text-muted">
                <i class="fas fa-info-circle me-2"></i> No subjects available
            </div>`;
        document.querySelector('button[type="submit"]').disabled = true;
        return;
    }

    document.querySelector('button[type="submit"]').disabled = false;

    // Create a select dropdown
    const select = document.createElement('select');
    select.className = 'form-select';
    select.id = 'subjectDropdown';
    select.name = 'subject_id';

    // Default option
    const defaultOption = document.createElement('option');
    defaultOption.text = 'Select a subject';
    defaultOption.value = '';
    select.appendChild(defaultOption);

    // Populate dropdown with subjects
    subjects.forEach(subject => {
        const option = document.createElement('option');
        option.value = subject.id;
        option.textContent = `${subject.code} - ${subject.name}`;
        select.appendChild(option);
    });

    // Update hidden input when selection changes
    select.addEventListener('change', function () {
        document.getElementById('selectedSubject').value = this.value;
    });

    subjectsList.appendChild(select);
}

</script>