const categorySelect = document.querySelector('#ticket_category');
const quantityInput = document.querySelector('#ticket_quantity');
const totalOutput = document.querySelector('#price_total');

if (categorySelect && quantityInput && totalOutput) {
    const formatRupiah = (amount) => new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        maximumFractionDigits: 0,
    }).format(amount);

    const updateTotal = () => {
        const price = Number(categorySelect.selectedOptions[0]?.dataset.price ?? 0);
        const quantity = Number(quantityInput.value) || 0;

        totalOutput.textContent = formatRupiah(price * quantity);
    };

    categorySelect.addEventListener('change', updateTotal);
    quantityInput.addEventListener('input', updateTotal);
    updateTotal();
}
