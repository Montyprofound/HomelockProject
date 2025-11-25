<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #0f4c75; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f9f9f9; }
        .footer { padding: 20px; text-align: center; color: #666; }
        .details { background: white; padding: 15px; margin: 15px 0; border-left: 4px solid #0f4c75; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Request Confirmation</h1>
            <p>Homelock Services</p>
        </div>
        
        <div class="content">
            <h2>Thank you, {{ $request->name }}!</h2>
            <p>We have received your request for <strong>{{ $request->service_display }}</strong> and will contact you within 24 hours.</p>
            
            <div class="details">
                <h3>Request Details:</h3>
                <p><strong>Service:</strong> {{ $request->service_display }}</p>
                <p><strong>Name:</strong> {{ $request->name }}</p>
                <p><strong>Email:</strong> {{ $request->email }}</p>
                <p><strong>Phone:</strong> {{ $request->phone }}</p>
                @if($request->company_name)
                <p><strong>Company:</strong> {{ $request->company_name }}</p>
                @endif
                @if($request->product_interest)
                <p><strong>Product Interest:</strong> {{ $request->product_interest }}</p>
                @endif
                <p><strong>Message:</strong> {{ $request->message }}</p>
                <p><strong>Submitted:</strong> {{ $request->created_at->format('M d, Y \a\t g:i A') }}</p>
            </div>
            
            <p>Our team will review your request and contact you soon. If you have any urgent questions, please call us at <strong>+1 (555) 123-4567</strong>.</p>
        </div>
        
        <div class="footer">
            <p>Homelock Services - Professional Security & Services</p>
            <p>Email: info@homelockservices.com | Phone: +1 (555) 123-4567</p>
        </div>
    </div>
</body>
</html>