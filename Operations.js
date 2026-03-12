let selectedSeats = [];

const checkboxes = document.querySelectorAll(".inputClass");

checkboxes.forEach(cb => {

    cb.addEventListener("change", function () {

        const seat = this.closest(".seat");

        if (this.checked) {
            selectedSeats.push(this.id);
            seat.classList.add("selectedSeat");
        } else {
            selectedSeats = selectedSeats.filter(s => s !== this.id);
            seat.classList.remove("selectedSeat");
        }

        console.log(selectedSeats);
    });

});

