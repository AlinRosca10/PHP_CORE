# 💰 Banking Calculator – Time Value for Compound Interest Deposits

## 📄 Description
The application simulates the evolution of a bank account in which the client receives compound interest annually, monthly or at another chosen compounding rate. 
The goal is to determine the **future value of the deposited amount** and the **balance at the end of each year**.

The program is designed as an **informative banking calculator**, useful for analyzing the time value of money.

---
## 💡 Practical scenario

A bank customer:
- initially deposits **2500 RON**
- adds **600 RON monthly**
- benefits from an annual interest rate of **11%**
- keeps the money in the bank for **8 years**

Starting with the second year, the balance becomes the total accumulated amount + the related interest.

---

## 🧮 Input data

| Variable | Description | Example |
|------------|------------|------|
| `initial_balance` | Initial amount deposited | `2500 RON` |
| `interest` | Annual interest (in percent) | `11%` |
| `years` | Number of years for which the evolution is calculated | `8` |
| `monthly_deposit` | Amount added monthly | `600 RON` |
| `compound_rate` | Compounding Frequency (Daily, Monthly, Quarterly, etc.) | `monthly` |

## 📤 Output

The program displays:
- Balance at the end of each year
- Interest earned annually
- Total accumulated after 8 years
- Evolution of the amount over time (graph or table)

---

## ⚙️ Mathematical calculation

The formula for compound interest is:

\[
S = P \times \left(1 + \frac{r}{n}\right)^{n \times t}
\]
where:
- `S` = final amount (balance)
- `P` = initial amount
- `r` = annual interest rate (ex: 0.11)
- `n` = number of compounds per year (ex: 12 for monthly)
- `t` = number of years

For monthly deposits, the formula becomes:

\[
S = D \times \frac{\left(1 + \frac{r}{n}\right)^{n \times t} - 1}{\frac{r}{n}}
\]

where `D` is the monthly deposit.

---

## 💻 Running examples (PHP)

```php
$initial_submission = 2500;
$monthly_deposit = 600;
$interest = 0.11;
$years = 8;
$compounding_rate = 12;

$sold_initial = $initial_submission * pow(1 + $interest / $compounding_rate, $years * $compounding_rate);
$sold_monthly_deposit = $monthly_deposit * (pow(1 + $interest / $compounding_rate, $years * $compounding_rate) - 1) / ($interest / $compounding_rate);
$total_sold = $sold_initial + $sold_monthly_deposit;

echo "After $years, the total balance is: " . number_format($total_sold, 2) . "RON";

---

## 📤 Output Data
