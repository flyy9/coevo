const toggleSwitch = document.getElementById("toggleSwitch");
const monthlyLabel = document.getElementById("monthlyLabel");
const yearlyLabel = document.getElementById("yearlyLabel");
const statusSpans = {
  status1: document.getElementById("status1"),
  status2: document.getElementById("status2"),
  status3: document.getElementById("status3"),
  status4: document.getElementById("status4"),
};

toggleSwitch.addEventListener("change", function() {
  const isChecked = this.checked;

  // Update the first span
  statusSpans.status1.textContent = isChecked ? "Rp. 750.000 /Tahun" : "Rp. 50.000 /Bulan";

  // Update the second span
  statusSpans.status2.textContent = isChecked ? "Rp. 2.000.000 /Tahun" : "Rp. 150.000 /Bulan";
  statusSpans.status3.textContent = isChecked ? "Rp. 3.200.000 /Tahun" : "Rp. 250.000 /Bulan";
  statusSpans.status4.textContent = isChecked ? "Rp. 5.400.000 /Tahun" : "Rp. 450.000 /Bulan";

  if (this.checked) {
    monthlyLabel.style.fontWeight = "normal";
    yearlyLabel.style.fontWeight = "600";
  } else {
    monthlyLabel.style.fontWeight = "600";
    yearlyLabel.style.fontWeight = "normal";
  }
});