<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>Pendaftaran berhasil</title>
</head>
<body style="margin:0; padding:0; background-color:#f8f3f5; color:#352c35; font-family:Arial, Helvetica, sans-serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color:#f8f3f5; padding:32px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="width:100%; max-width:600px; background-color:#ffffff; border-radius:20px; overflow:hidden;">
                    <tr>
                        <td style="padding:36px 40px; background-color:#733f5b; background-image:linear-gradient(135deg, #733f5b, #a66c86); color:#ffffff;">
                            <p style="margin:0 0 14px; font-size:12px; font-weight:bold; letter-spacing:2px; text-transform:uppercase; color:#f8dce8;">✦ Konser demo · Jakarta</p>
                            <h1 style="margin:0; font-size:30px; line-height:1.2; color:#ffffff;">Pendaftaran berhasil!</h1>
                            <p style="margin:14px 0 0; font-size:16px; line-height:1.6; color:#fff5f8;">Terima kasih sudah ikut dalam daydream ini, {{ $userName }}.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:32px 40px 12px;">
                            <p style="margin:0 0 8px; color:#8d6078; font-size:12px; font-weight:bold; letter-spacing:1.5px; text-transform:uppercase;">Ringkasan pendaftaran</p>
                            <p style="margin:0; color:#645963; font-size:15px; line-height:1.7;">Simpan detail berikut sebagai pengingat pendaftaran demo kamu.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:12px 40px 28px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="border:1px solid #eee5eb; border-radius:14px;">
                                <tr>
                                    <td style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#817681; font-size:13px;">Nama</td>
                                    <td align="right" style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#352c35; font-size:14px; font-weight:bold;">{{ $userName }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#817681; font-size:13px;">Email pendaftar</td>
                                    <td align="right" style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#352c35; font-size:14px; font-weight:bold; word-break:break-word;">{{ $userEmail }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#817681; font-size:13px;">Nomor registrasi</td>
                                    <td align="right" style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#352c35; font-size:14px; font-weight:bold;">{{ $registrationId }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#817681; font-size:13px;">Status registrasi</td>
                                    <td align="right" style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#733f5b; font-size:14px; font-weight:bold;">{{ $registrationStatus }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#817681; font-size:13px;">Tiket</td>
                                    <td align="right" style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#352c35; font-size:14px; font-weight:bold;">{{ $ticketCategory }} × {{ $ticketQuantity }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#817681; font-size:13px;">Jadwal</td>
                                    <td align="right" style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#352c35; font-size:14px; font-weight:bold;">{{ $eventDate }} · {{ $eventTime }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#817681; font-size:13px;">Lokasi</td>
                                    <td align="right" style="padding:17px 20px; border-bottom:1px solid #eee5eb; color:#352c35; font-size:14px; font-weight:bold;">{{ $eventVenue }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:17px 20px; color:#817681; font-size:13px;">Total ilustratif</td>
                                    <td align="right" style="padding:17px 20px; color:#733f5b; font-size:14px; font-weight:bold;">Rp {{ $totalPrice }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0 40px 32px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color:#fff8eb; border-left:4px solid #e8b56b;">
                                <tr>
                                    <td style="padding:15px 18px; color:#705936; font-size:13px; line-height:1.7;">
                                        <strong>Catatan:</strong> Ini adalah email konfirmasi untuk proyek demo. Pendaftaran ini bukan pemesanan resmi, pembayaran, atau tiket konser sungguhan.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding:22px 32px; background-color:#fbf8fa; color:#938895; font-size:12px; line-height:1.6;">
                            Email otomatis dari demo pendaftaran konser · Jakarta<br>
                            Dibuat dengan <span style="color:#b66e8a;">♥</span> untuk pengalaman demo.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>