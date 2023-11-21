<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <header>
        <h1>Fund Transfer</h1>
    </header>
    <div>
        <label for="amount">Amount (between $1-$5000):</label>
        <input type="number" name="amount" value="<?= $inputs['amount'] ?? '' ?>" id="amount" placeholder="Enter the transfered amount">
        <small><?= $errors['amount'] ?? '' ?></small>
    </div>

    <div>
        <label for="recipient_account">Recipient Account:</label>
        <input type="number" name="recipient_account" value="<?= $inputs['recipient_account'] ?? '' ?>" id="recipient_account" placeholder="Enter the recipient account">
        <small><?= $errors['recipient_account'] ?? '' ?></small>
    </div>

    <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
    <button type="submit">Transfer Now</button>
</form>