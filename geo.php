<?php
include_once "db.php";

if (isset($_GET['lat']) && isset($_GET['lon']) && isset($_GET['whois'])) {
    $lat = floatval($_GET['lat']);
    $lon = floatval($_GET['lon']);
    $whois = $_GET['whois'];

    if ($whois === 'ivan' || $whois === 'timur' || $whois === 'bogdan' && is_numeric($lat) && is_numeric($lon)) {
        switch ($whois) {
            case 'ivan':
                $token = '7162630977:AAG6zjRDgTh1FqdZej93mCDS2a88JKSmYEANOTACTUAL';
                $stmt = $conn->prepare("INSERT INTO LocationData (location, token) VALUES (?, ?)");
                $stmt->bind_param("ss", $location, $token);
                break;
            case 'timur':
                $token = '6474938216:AAGqoUpmrPJqGujRXbczK5ZyxDiTFIEQnJsNOTACTUAL';
                $stmt = $conn->prepare("INSERT INTO LocationData (location, token) VALUES (?, ?)");
                $stmt->bind_param("ss", $location, $token);
                break;
            case 'bogdan':
                $token = '6860006650:AAEiL91rgkqwiKC3wYkeBBPSbucxOMMEmVwNOTACTUAL';
                $stmt = $conn->prepare("INSERT INTO LocationData (location, token) VALUES (?, ?)");
                $stmt->bind_param("ss", $location, $token);
                break;
            default:
                $stmt = $conn->prepare("INSERT INTO LocationData (location) VALUES (?)");
                $stmt->bind_param("ss", $location);
                break;
        }

        $location = "{\"lat\": $lat, \"lon\": $lon}";

        if ($stmt->execute()) {
            echo "Ok";
        } else {
            echo "Err: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Err: Неверный формат данных или значение whois";
    }
} else {
    echo "Err: Недостаточно данных (широты и/или долготы)";
}
?>