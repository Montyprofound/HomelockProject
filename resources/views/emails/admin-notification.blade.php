<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Request Notification</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #dc3545; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f9f9f9; }
        .details { background: white; padding: 15px; margin: 15px 0; border-left: 4px solid #dc3545; }
        .btn { display: inline-block; padding: 10px 20px; background: #0f4c75; color: white; text-decoration: none; border-radius: 5px; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚨 New Request Alert</h1>
            <p>Homelock Services Admin</p>
        </div>
        
        <div class="content">
            <h2>New {{ $request->service_display }} Request</h2>
            <p>A new request has been submitted and requires your attention.</p>
            
            <div class="details">
                <h3>Customer Information:</h3>
                <p><strong>Name:</strong> {{ $request->name }}</p>
                <p><strong>Email:</strong> {{ $request->email }}</p>
                <p><strong>Phone:</strong> {{ $request->phone }}</p>
                @if($request->company_name)
                <p><strong>Company:</strong> {{ $request->company_name }}</p>
                @endif
                
                <h3>Request Details:</h3>
                <p><strong>Service Type:</strong> {{ $request->service_display }}</p>
                @if($request->product_interest)
                <p><strong>Product Interest:</strong> {{ $request->product_interest }}</p>
                @endif
                <p><strong>Message:</strong> {{ $request->message }}</p>
                <p><strong>Submitted:</strong> {{ $request->created_at->format('M d, Y \a\t g:i A') }}</p>
            </div>
            
            <a href="{{ url('/admin/requests/' . $request->id) }}" class="btn">View Full Request</a>
            
            <p><strong>Action Required:</strong> Please contact the customer within 24 hours to maintain our service standards.</p>
        </div>
    </div>
</body>
</html>