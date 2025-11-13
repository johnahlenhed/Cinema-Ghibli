document.querySelectorAll('.date').forEach(dateGroup => {
    dateGroup.addEventListener('click', (e) => {
        if (e.target.closest('button')) {
            const buttons = dateGroup.querySelectorAll('button');
            buttons.forEach(btn => btn.classList.remove('active'));
            e.target.closest('button').classList.add('active');
        }
    });
});