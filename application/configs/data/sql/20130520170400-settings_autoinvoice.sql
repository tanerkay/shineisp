INSERT INTO settings_parameters SET name = 'Automatic invoice creation', var = 'auto_create_invoice_after_payment', type = 'select', module = 'admin', enabled = 1, description = 'Automatically creates an invoice when the order is paid', group_id = 1, config = '{"class":"Settings","method":"getAutoInvoiceGenerationValues"}';  