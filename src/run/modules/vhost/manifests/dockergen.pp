class vhost::dockergen {
  file { '/root/vhost.conf.tmpl':
    ensure => present,
    content => template('vhost/vhost.conf.tmpl.erb')
  }

  file { '/root/vhost.php.tmpl':
    ensure => present,
    content => template('vhost/vhost.php.tmpl.erb')
  }

  file { '/root/dns.yml.tmpl':
    ensure => present,
    content => template('vhost/dns.yml.tmpl.erb')
  }
}
