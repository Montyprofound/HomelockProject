<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Request - Homelock Services</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #007bff; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f8f9fa; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #495057; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New {{ ucfirst(str_replace('_', ' ', $request->service_type)) }} Request</h1>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">Name:</span> {{ $request->name }}
            </div>
            
            <div class="field">
                <span class="label">Email:</span> {{ $request->email }}
            </div>
            
            <div class="field">
                <span class="label">Phone:</span> {{ $request->phone }}
            </div>
            
            @if($request->company_name)
            <div class="field">
                <span class="label">Company:</span> {{ $request->company_name }}
            </div>
            @endif
            
            <div class="field">
                <span class="label">Service Type:</span> {{ ucfirst(str_replace('_', ' ', $request->service_type)) }}
            </div>
            
            @if($request->product_interest)
            <div class="field">
                <span class="label">Product Interest:</span> {{ $request->product_interest }}
            </div>
            @endif
            
            <div class="field">
                <span class="label">Message:</span><br>
                {{ $request->message }}
            </div>
            
            <div class="field">
                <span class="label">Submitted:</span> {{ $request->created_at->format('M d, Y at h:i A') }}
            </div>
        </div>
    </div>
</body>
</html>