
// alert("Hola")
$(document).ready(function() {
    var counter = 0;

    $('.template-item').on('click', function() {
        addItem();
    });

    function addItem() {
        var additionalSection = `
    <div class="flex flex-col">
        <div class="md:grid-cols-2 flex text-center mt-5">
            <div class="inputBox">
                <input type="text" id="hospitalName${counter}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hospital Name" name="hospitalName[]">
            </div>
            <div class="mx-6">
                <input type="text" id="level${counter}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Level" name="level[]">
            </div>
            <div>
                <input type="date" id="startDate${counter}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Start Date" name="startDate[]">
            </div>
            <div class="mx-6">
                <input type="date" id="endDate${counter}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rest Date" name="endDate[]">
            </div>
            <div>
                <input type="text" id="exp${counter}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Experience" name="exper[]">
            </div>
        </div>
    </div>
`;

        $('.container').append(additionalSection);
        initializeDateDifferenceListener(counter);
        counter++;
    }

    function initializeDateDifferenceListener(index) {
        var startDateInput = document.getElementById(`startDate${index}`);
        var endDateInput = document.getElementById(`endDate${index}`);
        var experienceInput = document.getElementById(`exp${index}`);

        startDateInput.addEventListener('input', updateExperience);
        endDateInput.addEventListener('input', updateExperience);

        function updateExperience() {
            var startDate = new Date(startDateInput.value);
            var endDate = new Date(endDateInput.value);

            if (isNaN(startDate) || isNaN(endDate)) {
                experienceInput.value = '';
            } else {
                var startYear = startDate.getFullYear();
                var endYear = endDate.getFullYear();
                var differenceInYears = endYear - startYear;

                experienceInput.value = differenceInYears;
            }
        }
    }
    $('.removeItem').on('click', function() {
        let additionalSections = $('.container').children();
        if (additionalSections.length > 1) {
            additionalSections.last().remove();
            counter--;
        }
    });

});


function validateForm() {
    let startDate = document.querySelector('.start-date').value;
    let endDate = document.querySelector('.end-date').value;

    if (startDate >= endDate) {
        alert('Start date must be less than end date');
        return false;
    }

    return true;
}

const startDateInput = document.getElementById('startDate');
const endDateInput = document.getElementById('endDate');
const resultInput = document.getElementById('result');

endDateInput.addEventListener('input', calculateDifference);

function calculateDifference() {
    const startDate = new Date(startDateInput.value);
    const endDate = new Date(endDateInput.value);

    var startYear = startDate.getFullYear();
    var endYear = endDate.getFullYear();
    var differenceInYears = endYear - startYear;

    resultInput.value = differenceInYears;
}
